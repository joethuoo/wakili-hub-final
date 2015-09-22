<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Firm extends Model
{
    protected $table = 'Firm';

    protected $fillable = [
      'firm_name',
      'firm_registration_number',
      'firm_status',
      'firm_verified_status',
      'firm_experience',
      'firm_registered_date',
      'firm_mobile_number'
    ];

    public function social_connection()
    {
      return $this->hasMany('App\FirmSocialConnection');
    }

     public function practice_area()
    {
      return $this->hasMany('App\FirmPracticeArea');
    }

     public function logo()
    {
      return $this->hasOne('App\FirmPhoto');
    }

     public function location()
    {
      return $this->hasMany('App\FirmLocation');
    }

     public function contact()
    {
      return $this->hasMany('App\FirmContact');
    }

     public function association()
    {
      return $this->hasMany('App\FirmAssociation');
    }

    public function registrant()
    {
      return $this->hasMany('App\Registrant');
    }







}
