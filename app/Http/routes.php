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
use App\citas;
Route::get('/', function () {
    return view('index');
});

Route::get('servicios', function () {
    return view('cosmiatria/servicios');
});

//Route::get('admin', 'AdminController@index');
Route::get('admin', function(){
  $citas = citas::all();
  dd($citas);
return view('admin.layoutAdmin');
});
