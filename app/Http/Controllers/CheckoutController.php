<?php

namespace App\Http\Controllers;

use App\Model\OrderCustomerInformation;
use Illuminate\Http\Response;
use Illuminate\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Validator;
use App\Repository\IReferenceDataRepository;
use App\Http\Requests\CheckoutCustomerInformation;
use App\Model\Order;

class CheckoutController extends Controller {

    public function __construct(IReferenceDataRepository $referenceDataRepository) {
        $this->referenceDataRepository = $referenceDataRepository;
    }

    /**
     * Return the customer information page.
     *
     * @return Response
     */
    public function gotoCustomerInformation() {
        return View::make('checkout/customer');
    }

    /**
     * Complete the customer information form.
     *
     * @param CheckoutCustomerInformation $request
     * @return mixed
     */
    public function completeCustomerInformation(CheckoutCustomerInformation $request) {
        $orderCustomerInformation = new OrderCustomerInformation(array(
            'firstName' => $request->get('firstName'),
            'lastName' => $request->get('lastName'),
            'email' => $request->get('email'),
            'address' => $request->get('address'),
            'city' => $request->get('city'),
            'country' => $this->referenceDataRepository->getCountryById($request->get('country')),
            'postcode' => $request->get('postcode'),
        ));

        $order = new Order(array('orderCustomerInformation' => $orderCustomerInformation));

        session(['order' => $order]);

        return redirect('checkout/shipping');
    }

    /**
     * Return the shipping information page.
     *
     * @return Response
     */
    public function gotoShipping() {
        return View::make('checkout/shipping');
    }

    /**
     * Complete the shipping information step.
     *
     * @param Request $request
     * @return mixed
     */
    public function completeShipping(Request $request) {
        $validator = Validator::make($request->all(), [
            'shippingOption' => 'required|exists:shippingOption,id',
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->with('shippingOptions', $request->old('shippingOptions'));
        }

        $order = session('order');
        $order->shippingOption = $this->referenceDataRepository->getShippingOptionById($request->get('shippingOption'));
        session(['order' => $order]);


        return redirect('checkout/payment');
    }

    /**
     * Return the payment information page.
     *
     * @return Response
     */
    public function gotoPayment() {
        return View::make('checkout/payment');
    }

    /**
     * Complete the payment information step.
     *
     * @param Request $request
     * @return mixed
     */
    public function completePayment(Request $request) {
        Validator::make($request->all(), [
            'paymentOption' => 'required|exists:paymentOption,id',
        ])->validate();

        $order = session('order');
        $order->paymentOption = $this->referenceDataRepository->getPaymentOptionById($request->get('paymentOption'));
        session(['order' => $order]);

        return redirect('checkout/review');
    }

    /**
     * Return the review order page.
     *
     * @return Response
     */
    public function gotoReviewOrder() {
        return View::make('checkout/review');
    }

    /**
     * Complete the order (currently redirecting to paypal).
     *
     * @return Response
     */
    public function completeOrder() {
        // todo: paypal
        return redirect('/');
    }
}