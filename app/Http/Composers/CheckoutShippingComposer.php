<?php

namespace App\Http\Composers;

use Illuminate\View\View;
use App\Repository\IReferenceDataRepository;

class CheckoutShippingComposer {

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
        $view->with('shippingOptions', $this->referenceDataRepository->getShippingOptions());
    }
}