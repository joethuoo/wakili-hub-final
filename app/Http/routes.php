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

Route::get('/', function () {
    return view('index');
});

/*Route::get('lawyer','LawyerController@index');
Route::get('lawyer/create','LawyerController@create');
Route::get('lawyer/show/{id}','LawyerController@show');
Route::post('lawyer/store','LawyerController@store');
Route::get('lawyer/edit/{id}', 'LawyerController@edit');
Route::get('lawyer/update/{id}', 'LawyerController@update');
*///Route::get('lawyer/destroy/{id}', 'LawyerController@destroy');

Route::resource('lawyer','LawyerController');


Route::resource('firm','FirmController');
/*Route::get('firm', 'FirmController@index');
Route::get('firm/create','FirmController@create');
Route::get('firm/show/{id}','FirmController@show');
Route::get('firm/store','FirmController@store');
Route::get('firm/edit/{id}','FirmController@edit');
Route::get('firm/update/{id}','FirmController@update');*/
//Route::get('firm/destroy/{id}','FirmController@destroy');

