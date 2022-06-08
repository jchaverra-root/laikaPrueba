<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

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

Route::get( '/', [ProductoController::class, 'index'])->name('menuPrincipal');

// Route::post( 'crear', [ProductoController::class, 'guardar'])->name('productos.guardar');

// Route::get( '{producto}', [ProductoController::class, 'mostrar'])->name('productos.mostrar');

// Route::get( '{nota}/editar', [ProductoController::class, 'editar'])->name('productos.editar');

// Route::match(['put','patch'], '{producto}', [ProductoController::class, 'cargar'])->name('productos.cargar');

// Route::delete('productos/{producto}', [ProductoController::class, 'eliminar'])->name('productos.eliminar');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
