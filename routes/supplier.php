<?php

use App\Http\Controllers\SupplierController;
use App\Models\Supplier;
use ILLuminate\Support\Facades\Route;

Route::get('/suppliers',[SupplierController::class, 'index'])
    ->name('supplier.index');

Route::get('/suppliers/create',[SupplierController::class, 'create'])
    ->name('supplier.create');

Route::post('/suppliers',[SupplierController::class, 'store'])
    ->name('supplier.store');

Route::get('/suppliers/{supplier}/edit', [SupplierController::class, 'edit'])
    ->name('supplier.edit');    

Route::post('/suppliers/{supplier}', [SupplierController::class, 'update'])
    ->name('supplier.update');

Route::get('/suppliers/delete{supplier}', [SupplierController::class, 'show'])
    ->name('supplier.show');

Route::delete('/suppliers/{supplier}', [SupplierController::class, 'destroy'])
    ->name('supplier.destroy');