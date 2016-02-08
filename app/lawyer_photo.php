<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LawyerPhoto extends Model
{
    protected $table = 'lawyer_photo';

    protected $fillables = [
     'lawyer_photo_filename'
    ];

    public function lawyer_photo()
    {
    	return $this->belongsTo('App\Lawyer');
    }
}
