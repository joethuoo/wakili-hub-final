<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientNotification extends Model
{
    protected $table ='ClientNotification';

    protected $fillables = [
      'client_notification_status',
    ];

    public function client()
    {
    	return $this->belongsTo('App\Client');
    }
}
