<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class lawyer_association extends Model 
{
   

    /*The database table used by model.
    */
    protected $table = 'lawyer_association';

    /*The attributes that are mass assignable
    */
    protected $fillable = [
    'lawyer_association_institution',
    'lawyer_association_member',
    'year',
    'status'
    ];

/*This association belongs to lawyer*/
    public function lawyer()
    {
    	return $this->belongsTo('App\Lawyer');
    }
}
