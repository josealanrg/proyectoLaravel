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

Route::get('/', 'HomeController@index');




Route::get('{id}',['as' => 'grupo' ,'uses' => 'HomeController@gruposMaterias']);
Route::get('/grupos/{id}','HomeController@gruposMaterias');
Route::get('/pdf/{id}', ['as' => 'pdf','uses' =>  'HomeController@generapdf']);

