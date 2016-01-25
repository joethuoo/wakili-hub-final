<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registrant extends Model
{
     protected $table = 'registrant';

     protected $fillables = [
     'first_name',
<<<<<<< HEAD
     'second_name',
     'mobile_number',
     'email_address',
=======
<<<<<<< HEAD
     'second_name',
     'mobile_number',
     'email_address',
=======
     'last_name',
     'email_address',
     'mobile_number',
>>>>>>> 9564e1e41622f8a142c739c48a2627944d53163c
>>>>>>> 337af3db5d98aafd17b6cd5b2d0eefcc63163183
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
