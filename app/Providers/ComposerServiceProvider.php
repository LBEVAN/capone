<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider {

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot() {
        view()->composer('checkout/customer', 'App\Http\Composers\CheckoutCustomerComposer');
        view()->composer('checkout/shipping', 'App\Http\Composers\CheckoutShippingComposer');
        view()->composer('checkout/payment', 'App\Http\Composers\CheckoutPaymentComposer');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {
        //
    }
}