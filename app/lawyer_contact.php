
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lawyer_contact extends Model 
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
    'lawyer_contact_name',
    'lawyer_contact',
    'lawyer_contact_type',
    'lawyer_contact_status'
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