<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Exception\PayPalConnectionException;
use PayPal\Rest\ApiContext;
use Illuminate\Support\Facades\Input;
use URL;

use Session;
use Mail;

class CheckoutPayPalController extends Controller {

    private $apiContext;

    public function __construct() {

        // setup the PayPal api context
        $config = \Config::get('paypal');
        $this->apiContext = new ApiContext(new OAuthTokenCredential($config['client_id'], $config['secret']));
        $this->apiContext->setConfig($config['settings']);
    }

    public function completeOrder() {
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $items = [];

        foreach (session('cart')->getEntries() as $cartEntry) {
            $item = new Item();
            $item->setName($cartEntry->getProduct()->name);
            $item->setCurrency('GBP');
            $item->setQuantity($cartEntry->getQuantity());
            // generate the sku string with the products id and size
            $item->setSku($cartEntry->getProduct()->id . ' | ' . $cartEntry->getProductVariant()->size->description);
            // divide by the quantity as paypal expects price per item (not item * quantity).
            $item->setPrice($cartEntry->getPrice() / $cartEntry->getQuantity());

            array_push($items, $item);
        }

        $discountAmount = 0;
        if(session('order')->discount) {
            $discountAmount = session('cart')->getTotalPrice() / 100 * session('order')->discount->discountPercentage;
        }

        if(session('order')->discount) {
            $item = new Item();
            $item->setName('Discount');
            $item->setCurrency('GBP');
            $item->setQuantity(1);
            $item->setPrice(-$discountAmount);

            array_push($items, $item);
        }

        $itemList = new ItemList();
        $itemList->setItems($items);

        $details = new Details();
        $details->setShipping(session('order')->shippingOption->price)
            ->setSubtotal(session('cart')->getTotalPrice() - $discountAmount);

        $amount = new Amount();
        $amount->setCurrency('GBP')
            ->setTotal(session('order')->getTotal())
            ->setDetails($details);

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($itemList)
            ->setDescription('Capone Clothing Order');

        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl(URL::route('checkout.resolvePaymentStatus'))
            ->setCancelUrl(URL::route('checkout.resolvePaymentStatus'));

        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirectUrls)
            ->setTransactions(array($transaction));

        try {
            $payment->create($this->apiContext);
        } catch (PayPalConnectionException $ex) {
            Log::error('An error occurred establishing a connection to PayPal');
            Log::error('Code: ' . $ex->getCode());
            Log::error('Message: ' . $ex->getMessage());
            Log::error('Data: ' . $ex->getData());

            return redirect()->back()->withErrors('An error occurred establishing a connection to PayPal. Please try again later.');
        }

        $approvalUrl = $this->getApprovalUrl($payment);

        /** add payment ID to session **/
        session(['paymentId' => $payment->getId()]);
        if(isset($approvalUrl)) {
            return redirect($approvalUrl);
        }

        return redirect('checkout/review')->withErrors('An unknown error has occurred with the interface to PayPal. Please try again later.');
    }

    public function resolvePaymentStatus() {
        $paymentId = session('paymentId');

        session()->forget('paymentId');

        if (empty(Input::get('PayerID')) || empty(Input::get('token'))) {
            return redirect('checkout/review')->withErrors('Payment failed.');
        }

        $payment = Payment::get($paymentId, $this->apiContext);

        // PaymentExecution object includes information necessary to execute a PayPal account payment
        // the payer_id is added to the request query parameters by PayPal on their redirect

        $execution = new PaymentExecution();
        $execution->setPayerId(Input::get('PayerID'));

        // execute the payment
        $result = $payment->execute($execution, $this->apiContext);

        if ($result->getState() == 'approved') {

            $order = session('order');

            $orderData = array(
                'firstName' => $order->firstName,
                'lastName' => $order->lastName,
                'email' => $order->email,
                'address' => $order->address,
                'city' => $order->city,
                'postcode' => $order->postcode,
                'shipping' => $order->shippingOption->price,
                'items' => session('cart')
            );
    
            Mail::send('emails.confirmOrder', $orderData, function($message) use ($orderData){
                $message->subject('Capone Clothing- Order Confirmation');
                $message->to($orderData['email']);
                $message->from('CaponeClothing@yahoo.com');
            });

            Mail::send('emails.confirmOrderInternal', $orderData, function($message) use ($orderData){
                $message->subject('*** ORDER ALERT ***');
                $message->to('CaponeClothing@yahoo.com');
                $message->from($orderData['email']);
            });

            // insert order details to database
            session()->forget('order');
            session()->forget('cart');

            return redirect('/')->with('success', 'Payment successful.');
        }

        return redirect('checkout/review')->withErrors('Payment failed.');
    }

    private function getApprovalUrl($payment) {
        $redirectUrl = null;

        foreach($payment->getLinks() as $link) {
            if($link->getRel() == 'approval_url') {
                $redirectUrl = $link->getHref();
                break;
            }
        }

        return $redirectUrl;
    }
}