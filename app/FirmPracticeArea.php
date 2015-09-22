<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FirmPracticeArea extends Model
{
    protected $table = 'FirmPracticeArea';

    protected $fillables = [
      'firm_practice_name',
      'firm_practice_status',
      'firm_practice_year_from'
    ];

    public function firm()
    {
    	return $this->belongsTo('App\Firm');
    }
}
