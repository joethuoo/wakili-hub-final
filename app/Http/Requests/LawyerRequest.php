git<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class LawyerRequest extends Request
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
	    'lawyer_image'  => 'required|max:255', 
      'lawyer_first_name' => 'required|max:255', 
      'lawyer_middle_name'=> 'required|max:255',
      'lawyer_last_name'  => 'required|max:255',
      'lawyer_email_address' => 'required|email|max:255|unique:users',
      'lawyer_status' => 'required|true',
      'lawyer_lsk_number'  => 'required|numeric|max:20',
      'lawyer_national_id'  => 'required|numeric|max:40',
      'lawyer_verified_status' => 'required|true',
      'lawyer_experience'  => 'required|max:10',
      'lawyer_bios'  => 'required|max:400',
      'lawyer_date_registered'  => 'required|date_format',
      'lawyer_mobile_number'  => 'required|numeric|max:20',
      'password'   => 'required|confirmed|min:6'
                          

                          ];
    }
}
