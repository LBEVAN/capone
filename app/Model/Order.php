<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {

    protected $table = 'orders';
    protected $fillable = ['firstName', 'lastName', 'email', 'address', 'city', 'country', 'postcode', 'shippingOption', 'paymentOption', 'discount'];

    public function country() {
        return $this->belongsTo('App\Model\Country', 'countryId', 'id');
    }

    public function shippingOption() {
        return $this->belongsTo('App\Model\ShippingOption', 'shippingOptionId', 'id');
    }

    public function paymentOption() {
        return $this->belongsTo('App\Model\PaymentOption', 'paymentOptionId', 'id');
    }

    public function discount() {
        return $this->belongsTo('App\Model\Discount', 'discountId', 'id');
    }

    public function getTotal() {
        // todo:dont use session, append
        // todo: add discount
        $shippingPrice = 0;
        if($this->shippingOption) {
            $shippingPrice = $this->shippingOption->price;
        }

        $discount = 0;
        if($this->discount) {
            $discount = $this->discount->discountPercentage;
        }

        $totalPrice = session('cart')->getTotalPrice();
        $totalPriceWithDiscount = $totalPrice - ($totalPrice / 100 * $discount);

        return number_format($totalPriceWithDiscount + $shippingPrice, 2);
    }
}
