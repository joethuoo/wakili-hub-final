
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LawyerContact extends Model 
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'lawyer_contact';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


    protected $fillable = [
    'lawyer_address',
    'lawyer_phone',
    'lawyer_mobile_number',
    'lawyer_email',
    'lawyer_website',
    'lawyer_postal_address'
    ];

    /*This Contact belongs to lawyer*/

    public function lawyer()
    {
    	return $this->belongsTo('App\Lawyer');
    }

}




/*if($request->hasFile('image')){ 
          $filename = $request->file('image')->getClientOriginalName();
          $destination = public_path.'/images/';
          $request->file('image')->move($destination,$filename);*/