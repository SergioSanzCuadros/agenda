<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PersonaController;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::view('/', 'paginas/zz/welcome');

Route::resource('categorias', CategoriaController::class);

Route::resource('personas', PersonaController::class);
