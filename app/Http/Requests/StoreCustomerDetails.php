<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerDetails extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'firstname' => 'required|min:2',
            'lastname' => 'required',
            'email' => 'required',
            'company' => 'nullable',
            'street' => 'required',
            'suburb' => 'required',
            'city' => 'required',
            'region' => 'required',
            'contactPerson' => 'required',
            'contactPersonPhone' => 'required',
            'contactPersonCell' => 'required',
            'contactPersonEmail' => 'required'
        ];
    }
}
