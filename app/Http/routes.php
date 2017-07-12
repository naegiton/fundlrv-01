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




Route::get('fundtype-delete/{id?}','fundtypeController@delete');


//ประเภทของกองทุน
Route::resource('fundtype','fundtypeController');
Route::resource('fundtype_de','fundtype_deController');

Route::resource('indexadmin','indexadminController');


Route::controller('upload','UploadController');



?>
