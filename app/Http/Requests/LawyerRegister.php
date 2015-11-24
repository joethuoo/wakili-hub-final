<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class LawyerRegister extends Request
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
<<<<<<< HEAD
            
            'first_name' => 'required',
            'second_name' => 'required',
            'mobile_number' => 'required',
            'email_address' => 'required',
            'password' => 'required'
           
=======
           
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'mobile_number' => 'require|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',   
            'confirm_password' => 'required|confirmed|min:6'
>>>>>>> 9564e1e41622f8a142c739c48a2627944d53163c
        ];
    }
}
