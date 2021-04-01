<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\comprasController;
use App\Http\Controllers\articuloController;
use App\Http\Controllers\inventarioController;
use App\Http\Controllers\ventasController;

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

Route::get('/a/{id}', [UsuarioController::class, 'show']);


Route::get('/c/{id}', [articuloController::class, 'show']);


Route::get('/ventas/{id}', [ventasController::class, 'show']);


Route::get('/inventario/{id}', [inventarioController::class, 'show']);
