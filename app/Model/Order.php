<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {

    protected $table = 'order';
    protected $fillable = ['orderCustomerInformation', 'shippingOption', 'paymentOption'];

    public function customerInformation() {
        return $this->hasOne('App\Model\CustomerInformation');
    }

    public function shippingOption() {
        return $this->belongsTo('App\Model\shippingOption', 'shippingOptionId');
    }

    public function paymentOption() {
        return $this->belongsTo('App\Model\paymentOption', 'paymentOptionId');
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
