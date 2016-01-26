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


/*Route::get('lawyer/create','LawyerController@create');
Route::get('lawyer/show/{id}','LawyerController@show');
Route::post('lawyer/store','LawyerController@store');
Route::get('lawyer/edit/{id}', 'LawyerController@edit');
Route::get('lawyer/update/{id}', 'LawyerController@update');
*///Route::get('lawyer/destroy/{id}', 'LawyerController@destroy');

Route::get('/','LawyerController@index');
Route::get('lawyer','LawyerController@index');
Route::get('lawyer/lawyers/{id}/readmore', 'LawyerController@readmore');
Route::get('lawyer/lawyers/{id}','LawyerController@getLawyerById');
Route::post('search','LawyerController@search');

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



Route::get('lawyer/whyregister', 'LawyerController@whyregister');
Route::resource('lawyer','LawyerController');


Route::get('firm', 'FirmController@index');
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







