<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
use ILLuminate\Support\Facades\Route;

Route::get('/products',[ProductController::class, 'index'])
    ->name('product.index');

Route::get('/products/create',[ProductController::class, 'create'])
    ->name('product.create');

Route::post('/products',[ProductController::class, 'store'])
    ->name('product.store');

