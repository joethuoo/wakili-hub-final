<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lawyer_social_connection extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'lawyer_social_connection';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

     protected $fillable = [
     'lawyer_social_name',
     'lawyer_social_account',
     'lawyer_social_type',
     'lawyer_social_status'
     ];

     /*This social connection belongs to lawyer*/

     public function lawyer()
     {
     	return $this->belongsTo('App\Lawyer');
     }
}
