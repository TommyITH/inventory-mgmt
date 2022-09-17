<?php

use App\Http\Controllers\CategoryController;
use ILLuminate\Support\Facades\Route;

Route::get('/categories',[CategoryController::class, 'index'])->name('category.index');