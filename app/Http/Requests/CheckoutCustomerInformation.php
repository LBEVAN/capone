<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CheckoutCustomerInformation extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'firstName' => 'required|max:50',
            'lastName' => 'required|max:50',
            'email' => 'required|email',
            'address' => 'required|max:100',
            'city' => 'required|max:50',
            'country' => [ 'required', 'exists:country,id' ],
            'postcode' => array (
                'required',
                'regex:/^[a-zA-Z]{1,2}([0-9]{1,2}|[0-9][a-zA-Z])\s*[0-9][a-zA-Z]{2}$/'
            )
        ];
    }
}
