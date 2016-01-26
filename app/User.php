<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /*
    *The database table used by the model
    *
    *@var string
    **/
    protected $table = 'users';

    /*
    *The attributes that are mass assignable.
    *
    *@var array
    *
    ***/
    protected $fillable = [
            
            'first_name',
            'second_name',
            'mobile_number',
            'email',
<<<<<<< HEAD
            'password',
            'activation_code',
            'active',
=======
<<<<<<< HEAD
            'password',
            'activation_code',
            'active',
=======
            'password'
>>>>>>> 337af3db5d98aafd17b6cd5b2d0eefcc63163183
>>>>>>> 481eaf2e9e601d4811357506cd1880f56a6d0f45
             
        ];

   /**
   *The attributes excluded from thr model's JSON form
   *
   *@var array
   *
   ***/
<<<<<<< HEAD
   protected $hidden = ['password','remember_token'];
=======
<<<<<<< HEAD
   protected $hidden = ['password','remember_token'];
=======
   protected $hidden = ['passowrd','remember_token'];
>>>>>>> 337af3db5d98aafd17b6cd5b2d0eefcc63163183
>>>>>>> 481eaf2e9e601d4811357506cd1880f56a6d0f45



        public function activateAccount($code)
        {

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 481eaf2e9e601d4811357506cd1880f56a6d0f45
            $user = User::where('activation_code', $code)->update(['activation_code' => NULL,'active' => 1]);

            /*if($user){
            $user->update(['active' => 1, 'activation_code' => NULL]);
            //\Auth::login($user);
            
            return true;
            }*/
                 
<<<<<<< HEAD
=======
=======
            $user = User::where('activation_code', $code)->first();

            if($user){
            $user->update(['active' => 1, 'activation_code' => NULL]);
            \Auth::login($user);
            return true;
            }

>>>>>>> 337af3db5d98aafd17b6cd5b2d0eefcc63163183
>>>>>>> 481eaf2e9e601d4811357506cd1880f56a6d0f45
        }
}