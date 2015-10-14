<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\Request as FirmRequest;
use App\Firm;
//use App\Providers\RouteServiceProvider;

class FirmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // $firms = Firm::latest()->get();

       $area = DB::table('Firm')->join('firm_practice_area','Firm.firm_id','=', 'firm_practice_area.firm_practice_id')
                                   ->select('*')
                                   ->OrderBy('firm_practice_area.firm_practice_name')
                                   ->get();



        
         return view('firms',compact('area'));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    { 
        $area = DB::table('Firm')->join('firm_practice_area','Firm.firm_id','=', 'firm_practice_area.firm_practice_id')
                                 /*->join('firm_logo','Firm.firm_id','=','firm_logo.firm_logo_id')*/
                                   ->select('*')
                                   ->where('Firm.firm_id',$id)
                                   ->OrderBy('firm_practice_area.firm_practice_name')
                                   ->get();



      // $firms = DB::table('Firm')->select('*')->get();
        
         return view('firms',compact('area'));
    }


    public function jobs()
    {
        $jobs = DB::table('jobs')->join('Firm','jobs.id','=','Firm.firm_id')
                                 ->select('*')
                                 ->OrderBy('jobs.job_title')
                                 ->get();

        return view('jobs',compact('jobs'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

   

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('layouts.registerFirm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(FirmRequest $frequest)
    {
        $firm =  new Firm();
        $firm->firm_name = $frequest['firm_name'];
        $firm->firm_registration_number = $frequest['firm_registration_number'];
        $firm->firm_status = $frequest['firm_status'];
        $firm->firm_verified_status = $frequest['firm_verified_status'];
        $firm->firm_experience = $frequest['firm_experience'];
        $firm->firm_mobile_number = $frequest['firm_mobile_number'];
        $firm->save();

        $firm_social_conncetion = new FirmSocialConnection();
        $firm_social_conncetion->firm_social_name = $frequest['firm_social_name'];
        $firm_social_conncetion->firm_social_account = $frequest['firm_social_account'];
        $firm_social_conncetion->firm_social_type = $frequest['firm_social_type'];
        $firm_social_conncetion->firm_social_status = $frequest['firm_social_status'];
        $firm_social_conncetion->save();

        $firm_practice =  new FirmPracticeArea();
        $firm_practice->firm_practice_name = $frequest['firm_practice_name'];
        $firm_practice->firm_practice_status = $frequest['firm_practice_status'];
        $firm_practice->firm_practice_year_from = $frequest['firm_practice_year_from'];
        $firm_practice->save();

        $firm_photo = new FirmPhoto();
        $firm_photo->firm_photo_filename = $frequest['firm_photo_filename'];
        $firm_photo->save();

        $firm_location =  new FirmLocation();
        $firm_location->firm_location_building = $frequest['firm_location_building'];
        $firm_location->firm_location_street = $frequest['firm_location_street'];
        $firm_location->firm_location_town = $frequest['firm_location_town'];
        $firm_location->firm_location_county = $frequest['firm_location_county'];
        $firm_location->firm_location_city  = $frequest['firm_location_city'];
        $firm_location->firm_location_country = $frequest['firm_location_country'];
        $firm_location->firm_location_google = $frequest['firm_location_google'];
        $firm_location->firm_location_status = $frequest['firm_location_status'];
        $firm_location->save();

        $firm_contact = new FirmContact();
        $firm_contact->firm_contact_name = $frequest['firm_contact_name'];
        $firm_contact->firm_contact = $frequest['firm\_contact'];
        $firm_contact->firm_contact_type = $frequest['firm_contact_type'];
        $firm_contact->firm_contact_status = $frequest['firm_contact_status'];
        $firm_contact->save();

        $firm_association = new FirmAssociation();
        $firm_association->firm_association_institution = $frequest['firm_association_institution'];
        $firm_association->firm_association_member = $frequest['firm_association_member'];
        $firm_association->firm_association_year = $frequest['firm_association_year'];
        $firm_association->firm_association_status = $frequest['firm_association_status'];
        $firm_association->save();

        return view('layouts.loginFirm');

    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(FirmServiceProvider $firm_edit)
    {
          //$firm_edit = Firm::findOrFail($id);

        return view('firm.edit', compact($firm_edit));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(FirmRequest $request, FirmServiceProvider $firm_update)
    {
       // $firm_update = Firm::findOrFail($id);
        $firm_update->update($request->all());

        return redirect('firms');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
   /* public function destroy($id)
    {
        //
    }*/
}
