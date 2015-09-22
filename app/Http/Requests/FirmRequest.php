<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class FirmRequest extends Request
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
    public function rules(
)    {
        return [
      'firm_image'  => 'required|max:255', 
      'firm_name' => 'required|max:255', 
      'firm_registration_number'=> 'required|max:255',
      'firm_email_address' => 'required|email|max:255',
      'firm_status'  => 'required|max:255',
      'firm_verified_status' => 'required|max:255',
      'firm_experience' => 'required|max:255',
      'firm_date_registered'  => 'required|date_format',
      'firm_mobile_number'  => 'required|numeric|max:20',
      'password'   => 'required|confirmed|min:6'
        ];
    }
}
