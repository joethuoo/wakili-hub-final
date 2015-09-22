<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Featured extends Model
{
    protected $table = 'Featured';


    protected $fillables = [
      'featured_status',
      'featured_type',
      'featured_date'
    ];
}
