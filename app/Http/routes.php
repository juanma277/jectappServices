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
    return view('welcome');
});

Route::resource('images', 'ImagesController');

Route::group(['prefix' => 'V1', 'middleware' => 'cors'], function(){
	Route::resource('images', 'ImagesController');
});
