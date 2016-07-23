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

Route::get('/', 'PagesController@home');

Route::get('/cars', 'CarController@index');
Route::get('/cars/{car}', 'CarController@show');
Route::get('/cars/tickets/{car}', 'CarController@show_all_cars');

Route::get('/order', 'OrderController@index');
Route::post('/order', 'OrderController@create');
Route::patch('/order/{order}', 'OrderController@update');
Route::get('/order/{order}', 'OrderController@show');
Route::get('/order/{order}/delete', 'OrderController@delete');
Route::auth();

Route::get('/home', 'HomeController@index');
