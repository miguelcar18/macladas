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

Route::get('/', ['as' => 'principal', 'uses' => 'Front\FrontController@index']);
Route::get('/nosotros', ['as' => 'about', 'uses' => 'Front\FrontController@about']);
Route::get('/trabajos-realizados', ['as' => 'portfolio', 'uses' => 'Front\FrontController@portfolio']);
Route::get('/geotecnia', ['as' => 'geotecnia', 'uses' => 'Front\FrontController@geotecnia']);
Route::get('/hidrogeologia', ['as' => 'hidrogeologia', 'uses' => 'Front\FrontController@hidrogeologia']);
Route::get('/metalmecanica', ['as' => 'metalmecanica', 'uses' => 'Front\FrontController@metalmecanica']);
Route::get('/mineria', ['as' => 'mineria', 'uses' => 'Front\FrontController@mineria']);
Route::get('/resistividad', ['as' => 'resistividad', 'uses' => 'Front\FrontController@resistividad']);
Route::get('/clientes', ['as' => 'clients', 'uses' => 'Front\FrontController@clients']);
Route::get('/contactanos', ['as' => 'contacto', 'uses' => 'Front\FrontController@contacto']);
Route::post('/contactanos', ['as' => 'contacto.mensaje', 'uses' => 'Front\FrontController@mensaje']);