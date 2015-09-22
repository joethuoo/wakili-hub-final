<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lawyer_practice_areas extends Model
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'lawyer_practice_areas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'lawyer_practice_name',
    'lawyer_practice_status',
    'lawyer_practice_level',
    'lawyer_practice_year_from'
    ];

    /*This law practice belongd to Lawyer*/

    public function lawyer()
    {
    	return $this->belongsTo('App\Lawyer');
    }

}
