<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FirmContact extends Model
{
    protected $table = 'FirmContact';

    protected $fillables = [
      'firm_contact_name',
      'firm_contact',
      'firm_contact_type',
      'firm_contact_status'
    ];
  public function firm()
    {
    	return $this->belongsTo('App\Firm');
    }
}
