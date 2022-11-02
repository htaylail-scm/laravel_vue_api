<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductsCartController;
use App\Http\Controllers\Api\ProductsController;


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['namespace' => 'Api'], function () {
    Route::get('/products', [ProductsController::class, 'index']);
    Route::get('/products/{product}', [ProductsController::class, 'show']);

    Route::get('/cart', [ProductsCartController::class, 'index']);
    Route::post('/cart', [ProductsCartController::class, 'store']);
    Route::delete('/cart/{productId}', [ProductsCartController::class, 'destroy']);
    Route::delete('/cart', [ProductsCartController::class, 'destroyAll']);
});
