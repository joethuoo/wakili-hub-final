<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FirmLocation extends Model
{
    protected $table = 'FirmLocation';

    protected $fillables = [
      'firm_location_building',
      'firm_location_street',
      'firm_location_town',
      'firm_location_county',
      'firm_location_city',
      'firm_location_country',
      'firm_location_google',
      'firm_location_status'
    ];


    public function firm()
    {
      return $this->belongsTo('App\Firm');
    }

}
