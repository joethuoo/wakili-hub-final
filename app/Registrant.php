<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registrant extends Model
{
     protected $table = 'registrant';

     protected $fillables = [
     'first_name',
     'last_name',
     'email_address',
     'mobile_number',
     'password',
     
    
     ];

     /*
     *a registrant can only have one lawyers
     *
     *return \Illuminate\Database\Eloquent\Relations\HasOne
     */

     public function lawyer()
     {
          return $this->hasOne('App\Lawyer');
     }

     /*
     *a registrant can only have one Firms
     *
     *return \Illuminate\Database\Eloquent\Relations\HasOne
     */

     public function firm()
     {
          return $this->hasOne('App\Firm');
     }
}
