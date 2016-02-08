<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LawyerSocialConnection extends Model
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
     'lawyer_facebook',
     'lawyer_twitter',
     'lawyer_google_plus',
     'lawyer_linkedin'
     ];

     /*This social connection belongs to lawyer*/

     public function lawyer()
     {
     	return $this->belongsTo('App\Lawyer');
     }
}
