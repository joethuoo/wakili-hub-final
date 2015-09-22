<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FirmLogo extends Model
{
    protected $table = 'FirmLogo';

    protected $fillables = [
      'firm_photo_filename'
    ];

    public function firm()
    {
    	return $this->belongsTo('App\Firm');
    }
}
