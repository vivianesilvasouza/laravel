<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CategoriaApiCotroller;

/* Route::get('/categorias', [CategoriaApiCotroller::class, 'index']); */

Route::apiResource('categorias', CategoriaApiCotroller::class);
