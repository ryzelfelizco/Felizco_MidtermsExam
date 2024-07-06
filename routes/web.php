<?php

use App\Http\Controllers\ProductController;

Route::get('/products', [App\Http\Controllers\ProductController::class, 'index']);
Route::get('/', [ProductController::class, 'index']);
