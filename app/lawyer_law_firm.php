<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LawyerLawFirm extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'lawyer_law_firm	';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
    'lawyer_law_firm_name',
    'lawyer_law_firm_date',
    'lawyer_law_firm_year_from',
    'lawyer_law_firm_year_to',
    'lawyer_law_firm_status',
    ];
    

     /*This law-firm belongs to a lawyer*/
       public function lawyer()
       {
       	return $this->belongsTo('App\Lawyer');
       }
}
