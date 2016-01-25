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
            'password'
>>>>>>> 337af3db5d98aafd17b6cd5b2d0eefcc63163183
             
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
   protected $hidden = ['passowrd','remember_token'];
>>>>>>> 337af3db5d98aafd17b6cd5b2d0eefcc63163183



        public function activateAccount($code)
        {

<<<<<<< HEAD
            $user = User::where('activation_code', $code)->update(['activation_code' => NULL,'active' => 1]);

            /*if($user){
            $user->update(['active' => 1, 'activation_code' => NULL]);
            //\Auth::login($user);
            
            return true;
            }*/
                 
=======
            $user = User::where('activation_code', $code)->first();

            if($user){
            $user->update(['active' => 1, 'activation_code' => NULL]);
            \Auth::login($user);
            return true;
            }

>>>>>>> 337af3db5d98aafd17b6cd5b2d0eefcc63163183
        }
}