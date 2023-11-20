<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ManagementController;


Route::middleware(['auth', 'isAdminOrSaleManager',])->prefix('management')->group(function () {
    Route::get('/', [ManagementController::class, 'index']);
    Route::get('products', [ManagementController::class, 'products']);
    Route::get('product/edit/{id}', [ProductsController::class, 'edit'])->name('edit_product');
});
