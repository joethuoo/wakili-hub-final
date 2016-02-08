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
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 337af3db5d98aafd17b6cd5b2d0eefcc63163183
>>>>>>> 481eaf2e9e601d4811357506cd1880f56a6d0f45
>>>>>>> 126a11abae032c212042ff75fb2fe3921b1b6da8
            
            'first_name' => 'required',
            'second_name' => 'required',
            'mobile_number' => 'required',
            'email_address' => 'required',
            'password' => 'required'
           
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
           
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'mobile_number' => 'require|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',   
            'confirm_password' => 'required|confirmed|min:6'
>>>>>>> 9564e1e41622f8a142c739c48a2627944d53163c
>>>>>>> 337af3db5d98aafd17b6cd5b2d0eefcc63163183
>>>>>>> 481eaf2e9e601d4811357506cd1880f56a6d0f45
>>>>>>> 126a11abae032c212042ff75fb2fe3921b1b6da8
        ];
    }
}
