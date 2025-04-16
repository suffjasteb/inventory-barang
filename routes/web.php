<?php

use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;


Route::get( '/products', [ProductController::class, 'index']);
Route::get( '/products/create', [ProductController::class, 'create']);
Route::post( '/products/store', [ProductController::class, 'store']);