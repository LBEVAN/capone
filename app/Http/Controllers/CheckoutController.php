<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\View;
use App\Http\Requests\CheckoutCustomerInformation;
use App\Model\Order;

class CheckoutController extends Controller {

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
        // TODO: store the customer information!? - session
        $order = new Order(array('firstName' => $request->get('firstName')));

        return redirect('checkout/shipping')->with('order', $order);
    }

    /**
     * Return the shipping information page.
     *
     * @return Response
     */
    public function gotoShipping() {
        return View::make('checkout/shipping');
    }


}