<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;



class Lawyer extends Model 
{
  //implements AuthenticatableContract, CanResetPasswordContract

    //use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'lawyer';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 
	                        
                          'lawyer_first_name', 
                          'lawyer_middle_name',
                          'lawyer_last_name',
                          'lawyer_email_address',
                          'lawyer_lsk_number',
                          'lawyer_bios'                    
                          ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */

    protected $hidden = ['password', 'remember_token'];


     public function association()
    {
      return $this->hasMany('App\lawyer_association');
    }

    public function contact()
    {
      return $this->hasMany('App\lawyer_contact');
    }

    public function education()
    {
      return $this->hasMany('App\lawyer_education');
    }

    public function law_firm()
    {
      return $this->hasMany('App\lawyer_law_firm');
    }

    public function location()
    {
      return $this->belongsTo('App\lawyer_location');
    }

    public function practice_area()
    {
      return $this->hasMany('App\lawyer_practice_areas');
    }

    public function social()
    {
      return $this->hasMany('App\lawyer_social_connection');
    }

    public function user()
    {
<<<<<<< HEAD
      return $this->hasOne('App\User');
=======
      return $this->belongsTo('App\User');
>>>>>>> 126a11abae032c212042ff75fb2fe3921b1b6da8
    }


}
