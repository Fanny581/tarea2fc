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
        return ('usuario');
    });
    Route::get('producto', function()
    {
        return ('producto');
    });
    Route::get('venta', function()
    {
        return ('venta');
    });
    Route::get('compra', function()
    {
        return ('compra');
    });
    Route::get('inventario', function()
    {
        return ('inventario');
    });