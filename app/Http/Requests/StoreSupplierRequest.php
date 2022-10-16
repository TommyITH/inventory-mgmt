<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSupplierRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required|unique:suppliers|max:50',
            'phone'=>'required|unique:suppliers,phone_number|max:14',
            'address'=>'required|unique:suppliers|max:255'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Supplier name is required',
            'name.max' => 'Supplier name must be less than 50 characters',
            'phone.required' => 'Phone Number is required',
            'phone.max' => 'Phone Number must be less than 14 characters',
            'address.required' => 'Address is required',
            'address.max' => 'Address must be less than 255 characters',
        ];
    }
}
