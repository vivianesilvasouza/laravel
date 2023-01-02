<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CategoriaApiCotroller;
use App\Http\Controllers\Api\ProdutoApiCotroller;

Route::apiResource('produtos', ProdutoApiCotroller::class);
Route::apiResource('categorias', CategoriaApiCotroller::class);
