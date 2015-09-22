<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $table = 'Notification';

    protected $fillables = [
      'notification_name',
      'notification_status'
    ];
}
