<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FirmSocialConnection extends Model
{
    protected $table = 'FirmSocialConnection';

    protected $fillables = [
     'firm_social_name',
     'firm_social_account',
     'firm_social_type',
     'firm_social_status'
    ];

    public function firm()
    {
    	return $this->belongsTo('App\Firm');
    }
}
