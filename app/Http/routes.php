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

/*Route::get('lawyer','LawyerController@index');
Route::get('lawyer/create','LawyerController@create');
Route::get('lawyer/show/{id}','LawyerController@show');
Route::post('lawyer/store','LawyerController@store');
Route::get('lawyer/edit/{id}', 'LawyerController@edit');
Route::get('lawyer/update/{id}', 'LawyerController@update');
*///Route::get('lawyer/destroy/{id}', 'LawyerController@destroy');
Route::get('lawyer/lawyers/{id}/readmore', 'LawyerController@readmore');
Route::get('lawyer/lawyers/{id}','LawyerController@getLawyerById');

Route::post('search','LawyerController@search');

<<<<<<< HEAD
=======
Route::get('register','LawyerController@create');
>>>>>>> 9564e1e41622f8a142c739c48a2627944d53163c

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


Route::get('lawyer/whyregister', 'LawyerController@whyregister');
Route::resource('lawyer','LawyerController');

=======
>>>>>>> 9564e1e41622f8a142c739c48a2627944d53163c
Route::get('search', 'FirmController@search');
Route::get('firm/{id}/readmore','FirmController@readmore');
Route::get('firm/profile/{id}', 'FirmController@show');
Route::get('firm/jobs', 'FirmController@jobs');
Route::get('firm/contact', 'FirmController@contact');
Route::get('firm/about', 'FirmController@about');
Route::resource('firm','FirmController');
/*Route::get('firm', 'FirmController@index');
Route::get('firm/create','FirmController@create');
Route::get('firm/show/{id}','FirmController@show');
Route::get('firm/store','FirmController@store');
Route::get('firm/edit/{id}','FirmController@edit');
Route::get('firm/update/{id}','FirmController@update');*/
//Route::get('firm/destroy/{id}','FirmController@destroy');

