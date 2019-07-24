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

Route::get('/', 'InicioController@index')->name('inicio');
Route::get('/productos', 'ProductosController@index')->name('inicio-productos');
Route::get('/vender', 'ProductosController@create')->middleware('auth')->name('crear');
Route::get('/categoria1', 'CategoriasController@cat1')->name('inicio-categorias');
Route::get('/categoria2', 'CategoriasController@cat2')->name('inicio-categorias');
Route::get('/categoria3', 'CategoriasController@cat3')->name('inicio-categorias');
Route::post('/guardarProducto', 'ProductosController@save')->name('guardar');
Route::get('/editar/{id}', 'ProductosController@edit')->name('editar');
Route::get('/eliminar/{id}', 'ProductosController@delete')->name('eliminar');

Auth::routes();



/* Route::get('/', function () {
    return view('welcome');
}); */
