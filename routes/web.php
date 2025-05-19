<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\AuthController;
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
// buat nampilin halaman login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
// buat proses login
Route::post('/login', [AuthController::class, 'login']);
// buat nampilin register
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
// buat proses register
Route::post('/register', [AuthController::class, 'register']);