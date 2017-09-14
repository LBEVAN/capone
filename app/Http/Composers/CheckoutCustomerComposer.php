<?php

namespace App\Http\Composers;

use App\Repository\IReferenceDataRepository;
use Illuminate\View\View;

class CheckoutCustomerComposer {

    public function __construct(IReferenceDataRepository $referenceDataRepository) {
        $this->referenceDataRepository = $referenceDataRepository;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view) {
        $view->with('countries', $this->referenceDataRepository->getCountries());
    }
}