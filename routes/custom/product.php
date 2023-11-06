<?php
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

// Product Route
Route::get('products', [ProductsController::class, 'index']);
Route::get('add-to-cart/{id}', [ProductsController::class, 'addToCart'])->name('add_to_cart');
Route::get('cart', [ProductsController::class, 'cart']);
Route::get('update', [ProductsController::class,'update'])->name('cart_update');
