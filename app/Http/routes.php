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
Route::get('home', function () {
    return redirect('correo/salida');
});

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('prueba/correo', 'Prueba@sendEmailReminder');
Route::get('correo/salida', 'Correo@get_correo_salida');
Route::get('correo/borrador', 'Correo@get_correo_borrador');
Route::get('correo/enviado', 'Correo@get_correo_enviado');

//Route::post('user/{id}/confirmar_correo',UserController@verificar_usuario);
Route::resource('correo', 'Correo');

Route::resource('user', 'UserController');


Route::get('test', function () {
    dd(Config::get('mail'));
});

Route::get('/', function () {
    return view('welcome');
});
