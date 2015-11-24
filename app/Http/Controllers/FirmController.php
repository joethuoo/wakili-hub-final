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

       $areas = DB::table('Firm')->join('firm_practice_area','Firm.firm_id','=', 'firm_practice_area.firm_practice_id')
<<<<<<< HEAD
	   ->join('firm_logo','Firm.firm_id','=','firm_logo.firm_logo_id')
=======
       ->join('firm_logo','Firm.firm_id','=','firm_logo.firm_logo_id')
>>>>>>> 9564e1e41622f8a142c739c48a2627944d53163c
                                   ->select('*')
                                   ->OrderBy('firm_practice_area.firm_practice_name')
                                   ->get();


        $practices = DB::table('firm_practice_area')->lists('firm_practice_name');
        $new_practice = [];

        foreach($practices as $practice) {
            $new_practice = array_merge($new_practice, explode(", ", $practice));
        }

        $practices = array_unique($new_practice);
        sort($practices);

        $new_areas = [];

        foreach($practices as $practice) {
            $practice_name = strtolower(str_replace(' ', '', $practice));
            foreach($areas as $area) {
                if(strstr($area->firm_practice_name, $practice)) {
                    $new_areas[$practice_name]['area'][] = $area;
                    $new_areas[$practice_name]['title'] = $practice;
                }
            }
            $new_areas[$practice_name]['count'] = count($new_areas[$practice_name]['area']);
        }

//        dd($new_areas);
         return view('firms',compact('areas', 'new_areas'));
        
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
                                 ->join('firm_logo','Firm.firm_id','=','firm_logo.firm_logo_id')
                                   ->select('*')
                                   ->where('Firm.firm_id',$id)
                                   ->OrderBy('firm_practice_area.firm_practice_name')
                                   ->get();



      // $firms = DB::table('Firm')->select('*')->get();
        
         return view('firms',compact('area'));
    }

     public function readmore($id)
    {
        $more = DB::table('Firm')->join('firm_practice_area','Firm.firm_id','=', 'firm_practice_area.firm_practice_id')
                                 ->join('firm_logo','Firm.firm_id','=','firm_logo.firm_logo_id')
                                 ->join('firm_association', 'Firm.firm_id', '=', 'firm_association.firm_association_id')
                                   ->select('*')
                                   ->where('Firm.firm_id',$id)
                                   ->OrderBy('firm_practice_area.firm_practice_name')
                                   ->get();
        return view('morefirm', compact('more'));
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
<<<<<<< HEAD
	
	    public function search(Request $request) {
=======
    
        public function search(Request $request) {
>>>>>>> 9564e1e41622f8a142c739c48a2627944d53163c
        $keywords = $request->input('keywords');
        $location = $request->input('location');
        $category = $request->input('category');
        $country = $request->input('country');
        $address = $request->input('address');

        if($keywords == "" && $location == "" && $category == "" && $country == "" && $address == "")
            return redirect("/");

//        $lawyer = DB::table('Lawyer')
//            ->join('lawyer_practice_areas','Lawyer.lawyer_id', '=', 'lawyer_practice_areas.lawyer_practice_area_id')
//            ->join('lawyer_law_firm', 'Lawyer.lawyer_id', '=', 'lawyer_law_firm.lawyer_law_firm_id')
//            ->join('lawyer_location','lawyer_location.lawyer_id','=','Lawyer.lawyer_id')
//            ->select('*')
//            ->where('Lawyer.lawyer_id',$id)
//            ->OrderBy('lawyer_practice_areas.lawyer_practice_name')
//            ->get();
        $query_lawyer = "SELECT * FROM lawyer l
                          LEFT JOIN lawyer_practice_areas lpa ON l.lawyer_id = lpa.lawyer_practice_area_id
                          LEFT JOIN lawyer_location ll ON l.lawyer_id = ll.lawyer_id
                          LEFT JOIN lawyer_photo lp ON l.lawyer_id = lp.lawyer_photo_id
                          LEFT JOIN lawyer_law_firm llf ON l.lawyer_id = llf.lawyer_law_firm_id
                          WHERE (l.lawyer_first_name LIKE '%$keywords%' OR l.lawyer_middle_name LIKE '%$keywords%' OR l.lawyer_last_name LIKE '%$keywords%')
                          AND (ll.lawyer_location_town LIKE '%$location%' OR ll.lawyer_location_town IS NULL)
                          AND (lpa.lawyer_practice_name LIKE '%$category%' OR lpa.lawyer_practice_name IS NULL)
                          AND (ll.lawyer_location_country LIKE '%$country%' OR ll.lawyer_location_country IS NULL)
                          AND (ll.lawyer_location_street LIKE '%$address%' OR ll.lawyer_location_street IS NULL)
                          ";

        $query_firm = "SELECT * FROM firm f
                      LEFT JOIN firm_practice_area fpa ON f.firm_id = fpa.firm_practice_id
                      LEFT JOIN firm_location fl ON f.firm_id = fl.firm_id
                      LEFT JOIN firm_logo fp ON f.firm_id = fp.firm_id
                      WHERE (f.firm_name LIKE '%$keywords%')
                      AND (fl.firm_location_town LIKE '%$location%' OR fl.firm_location_town IS NULL)
                      AND (fpa.firm_practice_name LIKE '%$category%' OR fpa.firm_practice_name IS NULL)
                      AND (fl.firm_location_country LIKE '%$country%' OR fl.firm_location_country IS NULL)
                      AND (fl.firm_location_street LIKE '%$address%' OR fl.firm_location_street IS NULL)
                      ";

        $lawyers = DB::select($query_lawyer);
        $firms = DB::select($query_firm);

        return view('search', compact('lawyers', 'firms'));
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
