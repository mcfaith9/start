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
Route::get('/3d', function () {
    return view('3d_map.3d');
});
Route::get('/map', function () {
    return view('welcome_pages.welcome_map');
});


Route::auth();

Route::get('/home', 'HomeController@index');
