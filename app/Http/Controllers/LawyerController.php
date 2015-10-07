<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\Request as LawyerRequest;
use App\Lawyer;
use DB;

class LawyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
      //$lawyers = Lawyer::latest()->get();
      $lawyers = DB::table('Lawyer')->join('lawyer_law_firm', 'Lawyer.lawyer_id', '=', 'lawyer_law_firm.lawyer_law_firm_id' )
                                   //->join('lawyer_photo','lawyer_photo.lawyer_photo_id','=','Lawyer.lawyer_id')             
                                   ->select('*')
                                   ->OrderBy('lawyer_law_firm.lawyer_law_firm_name')
                                   ->get();

      

      $area = DB::table('Firm')->join('firm_practice_area','Firm.firm_id','=', 'firm_practice_area.firm_practice_id')                        
     ->select('*')
     ->OrderBy('firm_practice_area.firm_practice_name')
     ->get();


      
      return view('index', compact('lawyers','area'));
      
    }
  /**
     * Display collecction .
     *
     * @param  null
     * @return Response
     */

     
    public function show()
    {
          $areas = DB::table('Lawyer')->join('lawyer_practice_areas','Lawyer.lawyer_id', '=', 'lawyer_practice_areas.lawyer_practice_area_id')
                                    ->join('lawyer_law_firm', 'Lawyer.lawyer_id', '=', 'lawyer_law_firm.lawyer_law_firm_id') 
                                 //   ->join('lawyer_photo','lawyer_photo.lawyer_photo_id','=','Lawyer.lawyer_id')           
                                   ->select('*')
                                  // ->where('Lawyer.lawyer_id',$id)
                                   ->OrderBy('lawyer_practice_areas.lawyer_practice_name')
                                   ->get();
        return view('lawyers', compact('areas'));
    }

/**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
      public function getLawyerById($id)
    {
          $areas = DB::table('Lawyer')->join('lawyer_practice_areas','Lawyer.lawyer_id', '=', 'lawyer_practice_areas.lawyer_practice_area_id')
                                    ->join('lawyer_law_firm', 'Lawyer.lawyer_id', '=', 'lawyer_law_firm.lawyer_law_firm_id')            
                                   ->select('*')
                                   ->where('Lawyer.lawyer_id',$id)
                                   ->OrderBy('lawyer_practice_areas.lawyer_practice_name')
                                   ->get();
        return view('lawyers', compact('areas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
	 public function create()
    {
        return view('lawyer.registerLawyer');
    }
	
	
	  /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(LawyerRequest $request)
    {

        $lawyer = new Lawyer();
        $lawyer->lawyer_first_name = $request['lawyer_first_name']; 
        $lawyer->lawyer_middle_name = $request['lawyer_middle_name'];
        $lawyer->lawyer_last_name = $request['lawyer_last_name'];
        $lawyer->lawyer_email_address = $request['lawyer_email_address'];
        $lawyer->lawyer_status = $request['lawyer_status'];
        $lawyer->lawyer_lsk_number = $request['lawyer_lsk_number'];
        $lawyer->lawyer_national_id = $request['lawyer_national_id'];
        $lawyer->lawyer_verified_status = $request['lawyer_verified_status'];
        $lawyer->lawyer_experience = $request['lawyer_experience'];
        $lawyer->lawyer_bios = $request['lawyer_bios'];
        $lawyer->lawyer_date_registered = $request['lawyer_date_registered'];
        $lawyer->lawyer_mobile_number = $request['lawyer_mobile_number'];
        $lawyer->lawyer_image = $filename; 
        $lawyer->password = $request['password'];
        $lawyer->save();

        $lawyer_association = new lawyer_association();
        $lawyer_association->lawyer_association_institution = $request['lawyer_association_institution'];
        $lawyer_association->lawyer_association_member = $request['lawyer_association_member'];
        $lawyer_association->year = $request['year'];
        $lawyer_association->status = $request['status'];
        $lawyer_association->lawyer_association()->associate($lawyer);
        $lawyer_association->save();
		               

          $lawyer_contact = new lawyer_contact();
          $lawyer_contact->lawyer_contact_name  = $request['lawyer_contact_name'];
          $lawyer_contact->lawyer_contact       = $request['lawyer_contact'];
          $lawyer_contact->lawyer_contact_type  = $request['lawyer_contact_type'];
          $lawyer_contact->lawyer_contact_status = $request['lawyer_contact_status']; 
          $lawyer_contact->lawyer_contact()->associate($lawyer);
          $lawyer_contact->save();              
            //$lawyer->$lawyer_contact()->save($lawyer_contact);

          $lawyer_education = new lawyer_education();
          $lawyer_education->lawyer_education_institution = $request['lawyer_education_institution'];
          $lawyer_education->lawyer_education_certification = $request['lawyer_education_certification'];
          $lawyer_education->lawyer_education_year_from  = $request['lawyer_education_year_from'];
          $lawyer_education->lawyer_education_year_to  = $request['lawyer_education_year_to'];
          $lawyer_education->lawyer_education_status   = $request['lawyer_education_status'];
          $lawyer_education->lawyer_education()->associate($lawyer);
          $lawyer_education->save();
            //$lawyer->$lawyer_education()->save($lawyer_education);
        

          $lawyer_law_firm = new lawyer_law_firm();
          $lawyer_law_firm->lawyer_law_firm_name = $request['lawyer_law_firm_name'];
          $lawyer_law_firm->lawyer_law_firm_date = $request['lawyer_law_firm_date'];
          $lawyer_law_firm->lawyer_law_firm_year_from = $request['lawyer_law_firm_year_from'];
          $lawyer_law_firm->lawyer_law_firm_year_to = $request['lawyer_law_firm_year_to'];
          $lawyer_law_firm->lawyer_law_firm_status = $request['lawyer_law_firm_status'];
          $lawyer_law_firm->lawyer_law_firm()->associate($lawyer);
          $lawyer_law_firm->save();

          $lawyer_location = new lawyer_location();
          $lawyer_location->lawyer_location_building = $request['lawyer_location_building'];
          $lawyer_location->lawyer_location_street = $request['lawyer_location_street'];
          $lawyer_location->lawyer_location_town = $request['lawyer_location_town'];
          $lawyer_location->lawyer_location_county = $request['lawyer_location_county'];
          $lawyer_location->lawyer_location_city = $request['lawyer_location_city'];
          $lawyer_location->lawyer_location_google = $request['lawyer_location_google'];
          $lawyer_location->lawyer_location_status = $request['lawyer_location_status'];
          $lawyer_location->lawyer_location()->associate($lawyer);
          $lawyer_location->save();

          $lawyer_practice_areas = new lawyer_practice_areas();
          $lawyer_practice_areas->lawyer_practice_name = $request['lawyer_practice_name'];
          $lawyer_practice_areas->lawyer_practice_status = $request['lawyer_practice_status'];
          $lawyer_practice_areas->lawyer_practice_level = $request['lawyer_practice_level'];
          $lawyer_practice_areas->lawyer_practice_year_from = $request['lawyer_practice_year_from'];
          $lawyer_practice_areas->lawyer_practice()->associate($lawyer);
          $lawyer_practice_areas->save();

          $lawyer_social_connection = new lawyer_social_connection();
          $lawyer_social_connection->lawyer_social_name = $request['lawyer_social_name'];
          $lawyer_social_connection->lawyer_social_account = $request['lawyer_social_account'];
          $lawyer_social_connection->lawyer_social_type = $request['lawyer_social_type'];
          $lawyer_social_connection->lawyer_social_status = $request['lawyer_social_status'];
          $lawyer_social_connection->lawyer_social()->associate($lawyer);
          $lawyer_social_connection->save();

          $lawyer_photo = new lawyer_photo();
          $lawyer_photo->lawyer_photo_filename = $request['lawyer_photo'];
          $lawyer_photo->lawyer_photo()->associate($lawyer);
          $lawyer_photo->save();


       return view('lawyer.loginLawyer');
    }     

   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(LawyerServiceProvider $lawyer_edit)
    {
         //$lawyer_edit = Lawyer::findOrFail($id);
         
         return view('lawyer.edit',compact($lawyer_edit));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(LawyerRequest $request, LawyerServiceProvider $lawyer_update)
    {
       // $lawyer_update = Lawyer::findOrFail($id);
        $lawyer_update->update($request->all());

         return redirect('lawyers');
    } 

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    /*public function destroy($id)
    {
        //
    }*/
}
