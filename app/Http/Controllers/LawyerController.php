<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Geocoder\Geocoder;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\LawyerRequest;
use App\Lawyer;

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
      
       $lawyers = DB::table('lawyer')->join('lawyer_law_firm', 'lawyer.lawyer_id', '=', 'lawyer_law_firm.lawyer_law_firm_id' )
                                   ->join('lawyer_photo','lawyer_photo.lawyer_photo_id','=','lawyer.lawyer_id') 
                                   ->join('lawyer_practice_areas','lawyer_practice_areas.lawyer_practice_area_id','=','lawyer.lawyer_id')            
                                   ->select('*')
                                   ->OrderBy('lawyer_practice_areas.lawyer_id')
                                   ->get();

      

      $firms = DB::table('firm')->join('firm_practice_area','firm.firm_id','=', 'firm_practice_area.firm_practice_id')
       ->join('firm_logo','firm.firm_id','=','firm_logo.firm_logo_id')                        
     ->select('*')
     ->OrderBy('firm_practice_area.firm_practice_name')
     ->get();

        
        $practices = DB::table('lawyer_practice_areas')->lists('lawyer_practice_name');
        $new_practice = [];
        foreach($practices as $practice) {
            $new_practice = array_merge($new_practice, explode(", ", $practice));
        }
        $practices = array_unique($new_practice);
        sort($practices);
        $new_areas = [];
        foreach($practices as $practice) {
            $practice_name = strtolower(str_replace(' ', '', $practice));
            foreach($lawyers as $area) {
                if(strstr($area->lawyer_practice_name, $practice)) {
                    $new_areas[$practice_name]['area'][] = $area;
                    $new_areas[$practice_name]['title'] = $practice;
                }
            }
            $new_areas[$practice_name]['count'] = count($new_areas[$practice_name]['area']);
        }
      
      
      return view('index', compact('lawyers','firms', 'new_areas'));
      
    }
  /**
     * Display collecction .
     *
     * @param  null
     * @return Response
     */

     
public function show()
    {
          $areas = DB::table('lawyer')->join('lawyer_practice_areas','lawyer.lawyer_id', '=', 'lawyer_practice_areas.lawyer_practice_area_id')
                                    ->join('lawyer_law_firm', 'Lawyer.lawyer_id', '=', 'lawyer_law_firm.lawyer_law_firm_id') 
                                 ->join('lawyer_photo','lawyer_photo.lawyer_photo_id','=','lawyer.lawyer_id')           
                                   ->select('*')
                                  // ->where('Lawyer.lawyer_id',$id)
                                   ->OrderBy('lawyer_practice_areas.lawyer_practice_name')
                                   ->get();
        $practices = DB::table('lawyer_practice_areas')->lists('lawyer_practice_name');
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
                if(strstr($area->lawyer_practice_name, $practice)) {
                    $new_areas[$practice_name]['area'][] = $area;
                    $new_areas[$practice_name]['title'] = $practice;
                }
            }
            $new_areas[$practice_name]['count'] = count($new_areas[$practice_name]['area']);
        }
//        dd($new_areas);
        return view('lawyers', compact('areas', 'new_areas'));
    }

/**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
      public function getLawyerById($id)
    {
          $areas = DB::table('lawyer')->join('lawyer_practice_areas','lawyer.lawyer_id', '=', 'lawyer_practice_areas.lawyer_practice_area_id')
                                    ->join('lawyer_law_firm', 'lawyer.lawyer_id', '=', 'lawyer_law_firm.lawyer_law_firm_id') 
                                    ->join('lawyer_photo','lawyer_photo.lawyer_photo_id','=','lawyer.lawyer_id')           
                                   ->select('*')
                                   ->where('lawyer.lawyer_id',$id)
                                   ->OrderBy('lawyer_practice_areas.lawyer_practice_name')
                                   ->get();
        return view('lawyers', compact('areas'));
    }

    /**
     * Display the why Why Register Page in the Menu
     *of the web site.
     *
     * @param  null
     * @return Response
     */

    public function whyRegister()
    {
      return view('whyregister');
    }

    /**
     * Display the specific lawyer after clicking readmore.
     *
     * @param  int  $id
     * @return Response
     */
   public function readmore($id)
    {
     $more = DB::table('lawyer')->join('lawyer_practice_areas','lawyer.lawyer_id', '=', 'lawyer_practice_areas.lawyer_practice_area_id')
                                    ->join('lawyer_law_firm', 'lawyer.lawyer_id', '=', 'lawyer_law_firm.lawyer_law_firm_id') 
                                    ->join('lawyer_photo','lawyer_photo.lawyer_photo_id','=','lawyer.lawyer_id')
                                    ->join('lawyer_association','lawyer.lawyer_id', '=', 'lawyer_association.lawyer_association_id') 
                                    ->join('lawyer_education','lawyer.lawyer_id', '=', 'lawyer_education.lawyer_education_id')
                                    ->join('lawyer_location', 'lawyer.lawyer_id', '=', 'lawyer_location.lawyer_location_id')
                                    ->join('lawyer_contact', 'lawyer.lawyer_id', '=', 'lawyer_contact.lawyer_contact_id')
                                    
                                   ->select('*')
                                   ->where('lawyer.lawyer_id',$id)
                                   ->OrderBy('lawyer_practice_areas.lawyer_practice_area_id')
                                   ->get();
      return view('morelawyer',compact('more'));

    }


    public function contact()
    {
      /*$contact = DB::table('Lawyer')->join('lawyer_contact', 'Lawyer.lawyer_id', '=', 'lawyer_contact.lawyer_contact_id')
                                    ->join('lawyer_location', 'Lawyer.lawyer_id', '=', 'lawyer_location.lawyer_location_id')*/
         return view('contact');
    }


  

    public function search(Request $request) {
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
     * Store a newly created resource in storage.
     *
     * @param  LawyerRegister  $request
     * @return Response
     */
 

    public function doRegister(Request $request)
    {
             //DB::beginTransaction();

           /* try {*/
              $input= $request->all();
              $password = bcrypt($request->get('password'));
              $input['password'] = $password;
              $input['activation_code'] = $request->get('email').str_random(60);
              $register = User::create($input);
         /*   } catch (\Exception $e) {
            //DB::rollback();

            //dd($e);

            }*/
            

//DB::commit();
            $data = [
             'email'      => $input['email'],
             'first_name' => $input['first_name'],
             'code'       => $input['activation_code']
            ];
   
            Mail::send('emails.activate',$data, function($message) use($data){
             
            $message->to($data['email'])->subject('Activate your account!');
          });
           
         return view('whyregister');
        
    }

   /* public function sendEmail($data)
    {
      Mail::send('emails.activate',$data, function($message) use ($input){
            
            $message->to($input['email'],$input['first_name'])
                      ->subject('Activate your account!');
      });
    }*/

    public function activate($code,User $user)
    {
       $user = User::where('activation_code', $code)->get();
        
       if($user){
         $user = User::where('activation_code', $code)
         ->update(['activation_code' => NULL,'active' => 1]);
        return 'Acoounte Has Been Activated';
       }
       return 'Fail';
    }


    /*public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
              if (Auth::user()->active == 0) {
                    Auth::logout();
                    return 'Please activate your account';
              }
              else{
                return 'You have been logged in!';
              }
        }else{
          return 'The username and password do not match';
        }
    }


    public function logout()
    {
      Auth::logout();

      return redirect()->route('/');
    }*/

   /**
     * Email an existing lawyer.
     *
     * @param  Client/Email sender Request  $request
     * @return Response
     */
	      public function askLawyer(Request $client_query)
    {        
             $question = $client_query->all();
             $query = [
              'Name' => $question['Name'],
              'Email' => $question['Email'],
              'Website' => $question['Website'],
              'Comment' => $question['Comment'] 
             ];
             
             Mail::send('emails.lawyerquestion',$question, function($message) use ($question){
                   $message->to()->subject('Client Query');
             });
    }
     public function lawyerRegister()
  {
    return view('lawyer-register');
  }

  public function lawyerNameContact(Request $request)
  {    
       $first_name = $request->input('lawyer_first_name');
      
      
       //$extension = pathinfo(PATHINFO_EXTENSION);

       $filename = $first_name;
       $destinationPath = 'lawyers/';
      // $image = file_get_contents($lawyer_photo_path);
       $save = $request->file('lawyer_photo')->move($destinationPath, $fileName);

       if ($save) {
         
   DB::beginTransaction();
      try{
       DB::table('lawyer')->insertGetId([
          'lawyer_first_name'   => $request->input('lawyer_first_name'),
          'lawyer_middle_name' => $request->input('lawyer_middle_name'),
          'lawyer_last_name'   => $request->input('lawyer_last_name'),
          'lawyer_bios'        => $request->input('lawyer_bios'),
          'lawyer_lsk_number'  => $request->input('lawyer_lsk_number'),
          'lawyer_email_address'         =>  $request->input('lawyer_email'),
           'lawyer_mobile_number'       => $request->input('lawyer_mobile')
          ]);

      DB::table('lawyer_photo')->insertGetId([
          'lawyer_photo_filename' => $filename
        ]);

    DB::table('lawyer_contact')->insertGetId([
           'lawyer_postal_address' =>  $request->input('lawyer_postal_number'),
           'lawyer_website'      =>  $request->input('lawyer_website'),
           'lawyer_email'         =>  $request->input('lawyer_email'),
           'lawyer_phone'       => $request->input('lawyer_office_number'),
           'lawyer_mobile_number'       => $request->input('lawyer_mobile')
          
      ]);

       }catch(Exception $e){
        DB::rollback();
    }
         DB::commit();
         return view('lawyer-register2');
  }
}
  public function lawyerEducation(Request $request)
  {      
         $date1 = $request->input('lawyer_education_year_from');
         $formatdate1 = str_replace('/', '-', $date1);

         $date2 = $request->input('lawyer_education_year_to');
         $formatdate2 = str_replace('/', '-', $date2);

         $from = \Carbon\Carbon::parse($formatdate1)->format('Y-m-d');

         $to   =  \Carbon\Carbon::parse($formatdate2)->format('Y-m-d');
          
          
          DB::beginTransaction();
      try{
        DB::table('lawyer_education')->insertGetId([
        'lawyer_education_certification'       => $request->input('honors'),
        'lawyer_education_institution'         => $request->input('lawyer_education_institution'),
        //'lawyer_education_year_from'           => $from,
       // 'lawyer_education_year_to '            => $to
                           ]);
      }catch(Exception $e){
            DB::rollback();
      }
      DB::commit();
      return view('lawyer-register3');
  }

 public function lawyerAssociation(Request $request)
  {


     DB::beginTransaction();
    try{
        DB::table('lawyer_association')->insertGetId([
            'lawyer_association_institution' => $request->input('lawyer_association_institution'),
            //'lawyer_association_year'        => $request->input('lawyer_association_year'),
           // 'lawyer_association_year_to'     => $request->input('lawyer_association_year_to')
          ]);

        DB::table('lawyer_practice_areas')->insertGetId([
             'lawyer_practice_name'    => $request->input('lawyer_practice_name'),
          ]);
    }catch(Exception $e){
         DB::rollback();
    }
    DB::commit();
  return view('lawyer-register4');
 }

 public function lawyerCase(Request $request)
 {
  DB::beginTransaction();
     try{
       DB::table('lawyer_cases')->insertGetId([
      'case_name' => $request->input('case_name'),
      'case_country' => $request->input('case_country'),
      'case_town' => $request->input('case_town'),
      //'case_date' => $request->input('case_date'),
      'case_verdict' => $request->input('case_verdict')
        ]);
     }catch(Exception $e){
      DB::rollback();
     }
     DB::commit();
     return view('lawyer-register5');
 }

 public function lawyerLocation(Request $request)
 {
  DB::beginTransaction();

   try{
    DB::table('lawyer_location')->insertGetId([
      'lawyer_location_building' => $request->input('lawyer_location_building'),
      'lawyer_location_street'   => $request->input('lawyer_location_street'),
      'lawyer_location_town'     => $request->input('lawyer_location_town'),
       'lawyer_location_county'     => $request->input('lawyer_location_county'),
        'lawyer_location_city'     => $request->input('lawyer_location_city'),
         'lawyer_location_country'     => $request->input('lawyer_location_country'),
          'lawyer_location_google'     => $request->input('lawyer_location_town')

      ]);

    DB::table('lawyer_social_connection')->insertGetId([
     'lawyer_facebook' => $request->input('lawyer_facebook'),
     'lawyer_twitter'  => $request->input('lawyer_twitter'),
     'lawyer_google_plus' => $request->input('lawyer_google_plus'),
     'lawyer_linkedin' => $request->input('lawyer_linkedin')
      ]);
   }catch(Exception $e){
    DB::rollback();
   }
   DB::commit();

    return redirect('lawyer/lawyers');
 }


  public function lawyerRegister2()
  {
    return view('lawyer-register2');
  }

  public function lawyerRegister3()
  {
    return view('lawyer-register3');
  }

  public function lawyerRegister4()
  {
    return view('lawyer-register4');
  }

  public function lawyerRegister5()
  {
    return view('lawyer-register5');
  }
	
	  /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
 
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    /*public function edit(LawyerServiceProvider $lawyer_edit)
    {
         //$lawyer_edit = Lawyer::findOrFail($id);
         
         return view('lawyer.edit',compact($lawyer_edit));
    }*/

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
   /* public function update(LawyerRequest $request, LawyerServiceProvider $lawyer_update)
    {
       // $lawyer_update = Lawyer::findOrFail($id);
        $lawyer_update->update($request->all());

         return redirect('lawyers');
    } */

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
