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

# Aliados
Route::get('/aliados/index', 'Admin\AliadosController@index')->name('aliados.index');
Route::get('/aliados/new', 'Admin\AliadosController@showFrmRegistro')->name('aliados.new');
Route::post('/aliados/new', 'Admin\AliadosController@doRegistro')->name('aliados.new');
Route::get('/aliados/edit/{id}', 'Admin\AliadosController@showFrmEditar')->name('aliados.edit');
Route::post('/aliados/edit', 'Admin\AliadosController@doEditar')->name('aliados.doedit');
Route::post('/aliados/eliminar/{id}', 'Admin\AliadosController@doEliminar')->name('aliados.doeliminar');

# Diseñadores
Route::get('/disenador/index', 'Admin\DisenadorController@index')->name('admin.disenador.index');
Route::get('/disenador/new', 'Admin\DisenadorController@showFrmRegistro')->name('admin.disenador.new');
Route::post('/disenador/new', 'Admin\DisenadorController@doRegistro')->name('admin.disenador.new');
Route::get('/disenador/editar/{id}', 'Admin\DisenadorController@showFrmEditar');
Route::post('/disenador/editar/{id}', 'Admin\DisenadorController@doEditar');

#Cupones
Route::get('/cupon/index', 'Admin\CuponController@index')->name('admin.cupon.index');
Route::get('/cupon/new', 'Admin\CuponController@showFrmCupones')->name('admin.cupon.new');
Route::post('/cupon/new', 'Admin\CuponController@Registro')->name('admin.cupon.new');
Route::post('/cupon/editar/{caducidad}', 'Admin\CuponController@showFrmEditar');
Route::post('/cupon/editar/{caducidad}', 'Admin\CuponController@doEditar');