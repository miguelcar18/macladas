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
Route::get('/servicios', ['as' => 'services', 'uses' => 'Front\FrontController@services']);
Route::get('/clientes', ['as' => 'clients', 'uses' => 'Front\FrontController@clients']);
Route::get('/contactanos', ['as' => 'contacto', 'uses' => 'Front\FrontController@contacto']);
Route::post('/contactanos', ['as' => 'contacto.mensaje', 'uses' => 'Front\FrontController@mensaje']);