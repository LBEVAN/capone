<?php

namespace App\Repository;

use App\Model\PaymentOption;
use App\Model\ShippingOption;
use App\Model\Country;


class ReferenceDataRepository implements IReferenceDataRepository {

    public function getCountries() {
        return Country::all();
    }

    public function getCountryById($id) {
        return Country::find($id);
    }

    public function getShippingOptions() {
        return ShippingOption::all();
    }

    public function getShippingOptionById($id) {
        return ShippingOption::find($id);
    }

    public function getPaymentOptions() {
        return PaymentOption::all();
    }

    public function getPaymentOptionById($id) {
        return PaymentOption::find($id);
    }
}