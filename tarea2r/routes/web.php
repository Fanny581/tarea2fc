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
    Route::get('usuario', function()
    {
    return View::make('usuario');
    });
    Route::get('articulo', function () {
        return view('aruculo');
    });
    Route::get('ventas', function () {
        return view('ventas');
    });
    Route::get('compras', function () {
        return view('compras');
    });
    Route::get('inventario', function () {
        return view('inventario');
    });