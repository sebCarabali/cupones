<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('inicio');
});


Route::get('usuarios/login', 'LoginController@doLogin');
Route::get('usuarios/registro', 'RegistroController@create');
Route::post('usuarios/registro', 'RegistroController@doRegistro')->name('registro');