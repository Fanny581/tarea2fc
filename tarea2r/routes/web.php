<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\comprasController;
use App\Http\Controllers\articuloController;
use App\Http\Controllers\inventariogController;
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
Route::get('/a', [UsuarioController::class, 'index']);
Route::get('/b', [articuloController::class, 'index']);
Route::get('/c', [ventasController::class, 'index']);
Route::get('/compras', [comprasController::class, 'index']);
Route::get('/inventario', [ventasController::class, 'index']);