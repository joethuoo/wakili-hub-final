<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class LawyerAssociation extends Model 
{
   

    /*The database table used by model.
    */
    protected $table = 'lawyer_association';

    /*The attributes that are mass assignable
    */
    protected $fillable = [
    'lawyer_association_institution',
    'lawyer_association_year',
    'lawyer_association_year_to',
    'status'
    ];

    public function getDates()
    {
        return ['created_at', 'updated_at', 'lawyer_association_year', 'lawyer_assocation_year_to'];
    }

    public function setDobAttribute($value)
    {
        $this->attributes['lawyer_association_year'] = Carbon::createFromFormat('d/m/Y', $value);

        $this->attributes['lawyer_association_year_to'] = Carbon::createFromFormat('d/m/Y', $value);
    }

/*This association belongs to lawyer*/
    public function lawyer()
    {
    	return $this->belongsTo('App\Lawyer');
    }
}
