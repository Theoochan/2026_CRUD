<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\UserController;

//rotas controller

Route::resource('categorias', CategoriaController::class);
Route::resource('clientes', ClienteController::class);
Route::resource('produtos', ProdutoController::class);
Route::resource('users', UserController::class);


//rotas view
Route::get('/', function () {
    return view('welcome');
});
