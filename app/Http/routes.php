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

Route::get('/Lorem','P3loremController@getLorem');
Route::post('/Lorem','P3loremController@postLorem');

Route::get('/User','P3UserController@getUser');
Route::post('/User','P3UserController@postUser');
