<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {

    protected $table = 'orders';
    protected $fillable = ['firstName', 'lastName', 'email', 'address', 'city', 'country', 'postcode', 'shippingOption', 'paymentOption'];

    public function country() {
        return $this->belongsTo('App\Model\country', 'countryId', 'id');
    }

    public function shippingOption() {
        return $this->belongsTo('App\Model\shippingOption', 'shippingOptionId', 'id');
    }

    public function paymentOption() {
        return $this->belongsTo('App\Model\paymentOption', 'paymentOptionId', 'id');
    }

    public function getTotal() {
        // todo:dont use session, append
        // todo: add discount
        $shippingPrice = 0;
        if($this->shippingOption) {
            $shippingPrice = $this->shippingOption->price;
        }
        return number_format(session('cart')->getTotalPrice() + $shippingPrice, 2);
    }
}
