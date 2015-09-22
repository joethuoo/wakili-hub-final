<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'Client';

    protected $fillables = [
     'client_first_name',
     'client_last_name',
     'client_email_address',
     'client_mobile_number',
     'password',
     'client_status',
     'client_date_added'
    ];

    public function client_notification()
    {
        return $this->hasMany('App\ClientNotification');
    }
}
