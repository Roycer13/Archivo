<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DatoController;
use App\Http\Controllers\ImagenController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('categorias', CategoriaController::class);
Route::resource('imagens', ImagenController::class);
Route::resource('cursos', CursoController::class);
Route::resource('datos', DatoController::class);