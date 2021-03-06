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

Route::get('/', 'InicioController@index');

Auth::routes();

Route::get('/home', 'InicioController@index')->name('home');

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

# Categorias
Route::get('/admin/categorias', 'Admin\CategoriaController@index')->name('admin.categoria.index');
Route::get('/admin/categorias/new', 'Admin\CategoriaController@showFrmRegistrar')->name('admin.categoria.new');
Route::post('/admin/categorias/new', 'Admin\CategoriaController@doRegistrar');
Route::get('/admin/categorias/edit/{id}', 'Admin\CategoriaController@showFrmEditar');
Route::post('/admin/categorias/edit/{id}', 'Admin\CategoriaController@doEditar')->name('admin.categoria.edit');

#Cupones
Route::get('/admin/cupon/index', 'Admin\CuponController@index')->name('admin.cupon.index');
Route::get('/admin/cupon/new', 'Admin\CuponController@showFrmRegistro')->name('admin.cupon.new');
Route::post('/admin/cupon/new', 'Admin\CuponController@doRegistro')->name('admin.cupon.new');
Route::get('/admin/cupon/edit/{id}', 'Admin\CuponController@showFrmEditar')->name('admin.cupon.edit');
Route::post('/admin/cupon/edit/{id}', 'Admin\CuponController@doEditar')->name('admin.cupon.edit');

# Cupones usuario
Route::get('/vercupon/{id}', 'InicioController@loadCupon')->name('cupon.show');
Route::get('/cupon/comprar/', 'User\CuponController@comprar')->name('cupon.comprar');
Route::post('/cupon/comprar/', 'User\CuponController@doComprar')->name('cupon.comprar');

# Carrito
Route::get('/cart/index', 'CartController@show')->name('cart.show');
Route::get('/cupon/addCarrito/{id}', 'CartController@add')->name('cart.add');
Route::get('/cupon/updateCarrito/{id}/{qty}', 'CartController@update')->name('cart.update');
Route::get('/cupon/deleteCarrito/{id}', 'CartController@delete')->name('cart.delete');
Route::post('/comentario', 'InicioController@doComentario')->name('comentario');
Route::get('/comentario', 'InicioController@comentario')->name('comentario');

# Compras
Route::get('/admin/compra/show', 'Admin\ComprasController@show')->name('admin.compra.show');
Route::get('/admin/compra/detalle/{idCompra}', 'Admin\ComprasController@showDetalle')->name('admin.compra.detalle');

# Busqueda
Route::get('/search', 'InicioController@search')->name('busqueda');
Route::get('/search/{idCategoria}', 'InicioController@filter')->name('filter');