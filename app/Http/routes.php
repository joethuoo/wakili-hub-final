<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('index');
});*/

//Route::get('/','LawyerController@index');
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
>>>>>>> 337af3db5d98aafd17b6cd5b2d0eefcc63163183
>>>>>>> 481eaf2e9e601d4811357506cd1880f56a6d0f45
>>>>>>> 126a11abae032c212042ff75fb2fe3921b1b6da8

/*Route::get('lawyer/create','LawyerController@create');
Route::get('lawyer/show/{id}','LawyerController@show');
Route::post('lawyer/store','LawyerController@store');
Route::get('lawyer/edit/{id}', 'LawyerController@edit');
Route::get('lawyer/update/{id}', 'LawyerController@update');
*///Route::get('lawyer/destroy/{id}', 'LawyerController@destroy');
<<<<<<< HEAD

Route::get('/','LawyerController@index');
Route::get('lawyer','LawyerController@index');
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 337af3db5d98aafd17b6cd5b2d0eefcc63163183
>>>>>>> 481eaf2e9e601d4811357506cd1880f56a6d0f45
>>>>>>> 126a11abae032c212042ff75fb2fe3921b1b6da8
Route::get('lawyer/lawyers/{id}/readmore', 'LawyerController@readmore');
Route::get('lawyer/lawyers/{id}','LawyerController@getLawyerById');
Route::post('search','LawyerController@search');

<<<<<<< HEAD


Route::get('lawyer/whyregister', 'LawyerController@whyRegister');
//Route::get('lawyer/whyregister/register','LawyerController@getLawyerRegister');


Route::get('lawyer/whyregister/register', 'LawyerController@lawyerRegister');
Route::post('lawyer/register','LawyerController@lawyerNameContact');

Route::get('lawyer/whyregister/register2','LawyerController@lawyerRegister2');
Route::post('lawyer/education', 'LawyerController@lawyerEducation');

Route::get('lawyer/whyregister/register3','LawyerController@lawyerRegister3');
//Route::post('lawyer/practice', 'LawyerController@lawyerPractice');
Route::post('lawyer/association', 'LawyerController@lawyerAssociation');

Route::get('lawyer/whyregister/register4','LawyerController@lawyerRegister4');
Route::post('lawyer/case', 'LawyerController@lawyerCase');


Route::get('lawyer/whyregister/register5','LawyerController@lawyerRegister5');
Route::post('lawyer/location', 'LawyerController@lawyerLocation');

Route::get('lawyer/coordinates/{name}', function($name){
	try {
		 $geocode = \Geocoder::geocode("$name, Tanzania")->toArray();
 return Response::json($geocode);
	} catch (\Exception $e) {
		echo $e->getMessage();
	}

});
//Route::post('mailinglawyer', 'LawyerController@emailLawyer');

Route::post('register', 'LawyerController@userRegister');
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 481eaf2e9e601d4811357506cd1880f56a6d0f45
Route::post('register', 'LawyerController@doRegister');

Route::get('lawyer/whyregister', 'LawyerController@whyRegister');
Route::get('lawyer/whyregister/register','LawyerController@getLawyerRegister');
Route::post('lawyer/register','LawyerController@lawyerRegister');

Route::get('lawyer/whyregister/register2','LawyerController@lawyerRegister2');
Route::get('lawyer/whyregister/register3','LawyerController@lawyerRegister3');
Route::get('lawyer/whyregister/register4','LawyerController@lawyerRegister4');
Route::get('lawyer/whyregister/register5','LawyerController@lawyerRegister5');

Route::post('mailinglawyer', 'LawyerController@emailLawyer');
<<<<<<< HEAD


>>>>>>> 126a11abae032c212042ff75fb2fe3921b1b6da8
Route::get('registration/activate/{code}',
 'LawyerController@activate');



/*Route::post('/login', ['as' => 'login', 'uses' => 
	'LawyerController@login']);

Route::get('logout', ['as' => 'logout', 'uses' =>
	'LawyerController@logout']);*/


<<<<<<< HEAD
=======
=======
>>>>>>> 481eaf2e9e601d4811357506cd1880f56a6d0f45


Route::get('registration/activate/{code}',
 'LawyerController@activate');

<<<<<<< HEAD
Route::get('firm', 'FirmController@index');
=======
>>>>>>> 126a11abae032c212042ff75fb2fe3921b1b6da8


/*Route::post('/login', ['as' => 'login', 'uses' => 
	'LawyerController@login']);

<<<<<<< HEAD
Route::get('firm', 'FirmController@index');
=======
Route::get('logout', ['as' => 'logout', 'uses' =>
	'LawyerController@logout']);*/


=======
<<<<<<< HEAD
=======
Route::get('register','LawyerController@create');
>>>>>>> 9564e1e41622f8a142c739c48a2627944d53163c
>>>>>>> 337af3db5d98aafd17b6cd5b2d0eefcc63163183

Route::get('/','LawyerController@index');
Route::post('register', 'LawyerController@doRegister');

/*Route::get('/registration/activate/{code}', [ 'as' => 'activate', 'uses' =>
 'LawyerController@activate']);
*/
/*Route::get('/form',['as' => 'register', 'uses' => '
	LawyerController@index']);*/

Route::post('/login', ['as' => 'login', 'uses' => 
	'LawyerController@login']);

Route::get('logout', ['as' => 'logout', 'uses' =>
	'LawyerController@logout']);

<<<<<<< HEAD

<<<<<<< HEAD
Route::get('firm', 'FirmController@index');
=======

Route::get('lawyer/whyregister', 'LawyerController@whyregister');
Route::resource('lawyer','LawyerController');

=======
>>>>>>> 9564e1e41622f8a142c739c48a2627944d53163c
>>>>>>> 337af3db5d98aafd17b6cd5b2d0eefcc63163183
>>>>>>> 481eaf2e9e601d4811357506cd1880f56a6d0f45
>>>>>>> 126a11abae032c212042ff75fb2fe3921b1b6da8
Route::get('search', 'FirmController@search');
Route::get('firm/{id}/readmore','FirmController@readmore');
Route::get('firm/profile/{id}', 'FirmController@show');
Route::get('firm/jobs/viewjob', 'FirmController@viewjob');
Route::get('firm/jobs', 'FirmController@jobs');
Route::get('firm/contact', 'FirmController@contact');
Route::get('firm/about', 'FirmController@about');


Route::get('firm/whyregister','FirmController@whyRegister');
Route::get('firm/whyregister/firm_register','FirmController@firmRegister');
Route::get('firm/whyregister/firm_register2','FirmController@firmRegister2');
Route::get('firm/whyregister/firm_register3','FirmController@firmRegister3');
Route::get('firm/whyregister/firm_register4','FirmController@firmRegister4');
Route::get('firm/whyregister/firm_register5','FirmController@firmRegister5');







