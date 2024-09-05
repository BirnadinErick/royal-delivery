<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CuisineController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home']);

Route::get('/products', [ProductController::class, 'listAll']);
Route::get('/cuisines', [CuisineController::class, 'listAll']);
Route::get('/categories', [CategoryController::class, 'listAll']);

Route::get('/products/{product_id}', [ProductController::class, 'detail']);
Route::get('/cuisines/{cuisine_id}', [CuisineController::class, 'detail']);
Route::get('/categories/{category_id}', [CategoryController::class, 'detail']);
