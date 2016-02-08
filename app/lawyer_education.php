<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LawyerEducation extends Model
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
     'lawyer_education_certification',
     'lawyer_education_institution',
     'lawyer_education_year_from',
     'lawyer_education_year_to',
     
            ];

    public function getDates()
    {
        return ['created_at', 'updated_at', 'lawyer_education_year_from', 'lawyer_education_year_to'];
    }

    public function setDobAttribute($value)
    {
        $this->attributes['lawyer_education_year_from'] = Carbon::createFromFormat('d/m/Y', $value);

        $this->attributes['lawyer_education_year_to'] = Carbon::createFromFormat('d/m/Y', $value);
    }
 

    public function lawyer()
    {
    	return $this->belongsTo('App\Lawyer');

    }        

}
