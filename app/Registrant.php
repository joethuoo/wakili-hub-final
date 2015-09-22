<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registrant extends Model
{
     protected $table = 'registrant';

     protected $fillables = [
     'registrant_first_name',
     'registrant_last_name',
     'registrant_email_address',
     'registrant_mobile_number',
     'registrant_password',
     'registrant_status',
     'regstrant_date_added',
     'registrant_verified_account'
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
