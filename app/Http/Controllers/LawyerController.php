<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use Auth;
use App\User;
=======
>>>>>>> 9564e1e41622f8a142c739c48a2627944d53163c
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\Request as LawyerRequest;
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
      $lawyers = DB::table('Lawyer')->join('lawyer_law_firm', 'Lawyer.lawyer_id', '=', 'lawyer_law_firm.lawyer_law_firm_id' )
                                   ->join('lawyer_photo','lawyer_photo.lawyer_photo_id','=','Lawyer.lawyer_id')             
                                   ->select('*')
                                   ->OrderBy('lawyer_law_firm.lawyer_law_firm_name')
                                   ->get();

      

      $area = DB::table('Firm')->join('firm_practice_area','Firm.firm_id','=', 'firm_practice_area.firm_practice_id')
       ->join('firm_logo','Firm.firm_id','=','firm_logo.firm_logo_id')                        
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
      
      return view('index', compact('lawyers','area', 'practices'));
      
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
                                 ->join('lawyer_photo','lawyer_photo.lawyer_photo_id','=','Lawyer.lawyer_id')           
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
          $areas = DB::table('Lawyer')->join('lawyer_practice_areas','Lawyer.lawyer_id', '=', 'lawyer_practice_areas.lawyer_practice_area_id')
                                    ->join('lawyer_law_firm', 'Lawyer.lawyer_id', '=', 'lawyer_law_firm.lawyer_law_firm_id') 
                                    ->join('lawyer_photo','lawyer_photo.lawyer_photo_id','=','Lawyer.lawyer_id')           
                                   ->select('*')
                                   ->where('Lawyer.lawyer_id',$id)
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

    public function whyregister()
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
     $more = DB::table('Lawyer')->join('lawyer_practice_areas','Lawyer.lawyer_id', '=', 'lawyer_practice_areas.lawyer_practice_area_id')
                                    ->join('lawyer_law_firm', 'Lawyer.lawyer_id', '=', 'lawyer_law_firm.lawyer_law_firm_id') 
                                    ->join('lawyer_photo','lawyer_photo.lawyer_photo_id','=','Lawyer.lawyer_id')           
                                   ->select('*')
                                   ->where('Lawyer.lawyer_id',$id)
                                   ->OrderBy('lawyer_practice_areas.lawyer_practice_name')
                                   ->get();
      return view('readmore',compact('more'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
<<<<<<< HEAD
	 public function create()    {
=======
   public function create()    {
>>>>>>> 9564e1e41622f8a142c739c48a2627944d53163c
        return view('register');
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

<<<<<<< HEAD
    public function doRegister(Request $request)
    {
     // $input = $request->all();
      /*$user = DB::insert('insert into users (users_id,first_name,second_name,mobile_number,email,password) values
        (?,?,?,?,?,?) ',[$request->first_name,$request->second_name,$request->mobile_number,
          $request->email,$request->password]);
      */

             //DB::beginTransaction();

            try {

            User::create([
            'first_name' => $request->get('first_name'),
            'second_name' => $request->get('second_name'),
            'mobile_number' => $request->get('mobile_number'),
            'email' => $request->get('email'),
            'password' => bcrypt($request->get('password')),
            ]);

            } catch (\Exception $e) {
            //DB::rollback();

            //dd($e);

            }

//DB::commit();
  
   /* $data = [
       'first_name' => $input['first_name'],
       'code' => $input['activation_code']
    ];

    $this->sendEmail($data,$input);*/ 

    return 'Hello world';
      
    }

    public function sendEmail($data,$input)
    {
      Mail::send('email.register',$data, function($message) use ($input){
            $message->from('team@wakilihub.co.ke','Laravel is the best');
            $message->to($input['email'],$input['first_name'])
                      ->subject('Activate your account!');
      });
    }

    public function activate($code,User $user)
    {
     if($user->activateAccount($code)){
      return 'Activated';
     }
     return 'Fail';
    }


    public function login(LoginRequest $request)
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
    }

   
	
	
	  /**
=======
    public function wekalawyer(LawyerRegister $request)
    {
      $confirmation_code = str_random(30);

      $user = Registrant::create([
        'first_name' => $request['firstname'],
        'last_name' => $request['lastname'],
        'mobile_number' => $request['phonenumber'],
        'email' => $request['email'],
        'password' => Hash::make($request['password']),
        'confirmation_code' => $confirmation_code
        
        ]);
      

      Mail::send('emails',$confirmation_code, function($message){
             $message->to($request['email'],$request['firstname'])->subject('welcome');
             
      });

      Flash::message('Thanks for signing up! Please check your email.');

       return view('lawyers');
    }
  
  
    /**
>>>>>>> 9564e1e41622f8a142c739c48a2627944d53163c
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
  /*  public function store(LawyerRequest $request)
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
*/
   

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
