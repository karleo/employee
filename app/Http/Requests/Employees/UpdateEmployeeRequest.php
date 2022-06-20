<?php

namespace App\Http\Requests\Employees;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            //
            'emp_no' => 'required',
            'website' => 'required',
            'fname' => 'required',
            'mname' => 'required',
            'lname' => 'required',
            'contact_no' => 'required',
            'mobile_no' => 'required',
            'address' => 'required',
            'company' => 'required',
            'company_add' => 'required',
            'email_add' => 'required',       
        ];
    }
}
