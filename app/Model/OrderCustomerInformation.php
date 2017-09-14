<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OrderCustomerInformation extends Model {

    protected $table = 'orderCustomerInformation';

    protected $fillable = ['firstName', 'lastName', 'email', 'address', 'city', 'country', 'postcode', 'shippingOption'];

    public function country() {
        return $this->belongsTo('App\Model\Country', 'countryId');
    }
}
