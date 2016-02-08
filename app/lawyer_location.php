<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LawyerLocation extends Model
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'lawyer_location';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
    'lawyer_location_building',
    'lawyer_location_street',
    'lawyer_location_town',
    'lawyer_location_county',
    'lawyer_location_city',
    'lawyer_location_country',
    'lawyer_location_google',
    
    ];
    

    /*This location can have many Lawyers*/

    public function lawyer()
    {
    	return $this->hasMany('App\Lawyer');
    }

}
