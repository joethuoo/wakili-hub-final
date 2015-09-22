<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lawyer_education extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'lawyer_education';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

     protected $fillable =[
     'lawyer_education_institution',
     'lawyer_education_certification',
     'lawyer_education_year_from',
     'lawyer_education_year_to',
     'lawyer_education_status'
            ]; 

    public function lawyer()
    {
    	return $this->belongsTo('App\Lawyer');

    }        

}
