<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FirmAssociation extends Model
{
    protected $table = 'FirmAssociation';

    protected $fillables = [
       'firm_association_institution',
       'firm_association_member',
       'firm_association_year',
       'firm_asssociation_status'
    ];

    public function firm()
    {
    	return $this->belongsTo('App\Firm');
    }
}
