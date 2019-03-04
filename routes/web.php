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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/aliados/index', 'AliadosController@index')->name('aliados.index');
Route::get('/aliados/new', 'AliadosController@showFrmRegistro')->name('aliados.new');
Route::post('/aliados/new', 'AliadosController@doRegistro')->name('aliados.new');
Route::get('/aliados/edit/{id}', 'AliadosController@showFrmEditar')->name('aliados.edit');
