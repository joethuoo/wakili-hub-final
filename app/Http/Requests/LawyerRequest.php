<?php

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
	     
      'lawyer_first_name' => 'required|max:255', 
      'lawyer_middle_name'=> 'required|max:255',
      'lawyer_last_name'  => 'required|max:255',
      'lawyer_lsk_number'  => 'required|numeric|max:20',
      'lawyer_bios'  => 'required|max:400',

       'lawyer_postal_number' => 'required|numeric|max:6',
      'lawyer_email' => 'required|email',
       'lawyer_email_address' => 'required|email',
      'lawyer_mobile'  => 'required|numeric|max:15',
      'lawyer_office_number' => 'required|numeric|max:15'
     
     
                          

                          ];
    }
}
