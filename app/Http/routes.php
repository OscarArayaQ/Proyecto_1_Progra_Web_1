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
Route::get('prueba/correo','Prueba@sendEmailReminder');
Route::resource('prueba','Prueba');
Route::resource('user','UserController');


Route::get('test', function()
{
    dd(Config::get('mail'));
});

Route::get('/', function () {
    return view('welcome');
});
