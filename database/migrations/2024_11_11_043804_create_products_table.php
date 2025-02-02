<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;


Route::apiResource('categories', CategoryController::class);
Route::get('/product/cheapest', [ProductController::class, 'cheapest']);
Route::get('/product/most-expensive', [ProductController::class, 'mostExpensive']);
Route::get('/categories/{id}/products', [CategoryController::class, 'productsByCategory']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});