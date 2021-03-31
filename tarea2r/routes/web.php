<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
    Route::get('usuario/crear', 'UsuarioController@create')
    ->name('usuario.create');
    Route::get('articulo', 'articuloController@create')
    ->name('articulo.create');
    Route::get('ventas', 'ventasController@create')
    ->name('ventas.create');
    Route::get('compras', 'comprasController@create')
    ->name('compras.create');
    Route::get('inventario','inventarioController@create')
    ->name('inventario.create');