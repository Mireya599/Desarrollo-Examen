<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedoreController;
use App\Http\Controllers\CompraController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('categorias', App\Http\Controllers\CategoriaController::class);
Route::resource('productos', App\Http\Controllers\ProductoController::class);
Route::resource('proveedores', App\Http\Controllers\ProveedoreController::class);
Route::resource('compras', App\Http\Controllers\CompraController::class);
