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
>>>>>>> 337af3db5d98aafd17b6cd5b2d0eefcc63163183

/*Route::get('lawyer/create','LawyerController@create');
Route::get('lawyer/show/{id}','LawyerController@show');
Route::post('lawyer/store','LawyerController@store');
Route::get('lawyer/edit/{id}', 'LawyerController@edit');
Route::get('lawyer/update/{id}', 'LawyerController@update');
*///Route::get('lawyer/destroy/{id}', 'LawyerController@destroy');
<<<<<<< HEAD

Route::get('/','LawyerController@index');
Route::get('lawyer','LawyerController@index');
=======
>>>>>>> 337af3db5d98aafd17b6cd5b2d0eefcc63163183
Route::get('lawyer/lawyers/{id}/readmore', 'LawyerController@readmore');
Route::get('lawyer/lawyers/{id}','LawyerController@getLawyerById');
Route::post('search','LawyerController@search');

<<<<<<< HEAD
Route::post('register', 'LawyerController@doRegister');

Route::get('lawyer/whyregister', 'LawyerController@whyRegister');
Route::get('lawyer/whyregister/register','LawyerController@getLawyerRegister');
Route::post('lawyer/register','LawyerController@lawyerRegister');

Route::get('lawyer/whyregister/register2','LawyerController@lawyerRegister2');
Route::get('lawyer/whyregister/register3','LawyerController@lawyerRegister3');
Route::get('lawyer/whyregister/register4','LawyerController@lawyerRegister4');
Route::get('lawyer/whyregister/register5','LawyerController@lawyerRegister5');

Route::post('mailinglawyer', 'LawyerController@emailLawyer');


Route::get('registration/activate/{code}',
 'LawyerController@activate');



/*Route::post('/login', ['as' => 'login', 'uses' => 
	'LawyerController@login']);

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







