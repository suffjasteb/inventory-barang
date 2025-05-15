<?php

use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;


Route::get( '/products', [ProductController::class, 'index']);
Route::get('/', function() {
    return view('tes');
});
Route::delete('/products/{product}', [ProductController::class, 'delete']);
Route::get('products/edit/{product}', [ProductController::class, 'edit']);
Route::put('/products/{product}', [ProductController::class, 'update']);
Route::get( '/products/create', [ProductController::class, 'create']);
Route::post( '/products/store', [ProductController::class, 'store']);