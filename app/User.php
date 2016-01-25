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
            'password',
            'activation_code',
            'active',
             
        ];

   /**
   *The attributes excluded from thr model's JSON form
   *
   *@var array
   *
   ***/
   protected $hidden = ['password','remember_token'];



        public function activateAccount($code)
        {

            $user = User::where('activation_code', $code)->update(['activation_code' => NULL,'active' => 1]);

            /*if($user){
            $user->update(['active' => 1, 'activation_code' => NULL]);
            //\Auth::login($user);
            
            return true;
            }*/
                 
        }
}