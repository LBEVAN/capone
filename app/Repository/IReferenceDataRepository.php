<?php

namespace App\Repository;


use App\ShippingOption;

interface IReferenceDataRepository {

    public function getCountries();

    public function getCountryById($id);

    public function getShippingOptions();

    public function getShippingOptionById($id);

    public function getPaymentOptions();

    public function getPaymentOptionById($id);

}