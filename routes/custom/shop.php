<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductsController;

// Product Route
Route::get('products', [ProductsController::class, 'index']);

// Cart
Route::get('cart', [CartController::class, 'cart']);
Route::get('add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add_to_cart');
Route::patch('update-cart', [CartController::class, 'update'])->name('update_cart');
Route::delete('remove-from-cart/{id}', [CartController::class, 'destory'])->name('remove_from_cart');
Route::get('customer-id', [CartController::class, 'customerId']);


Route::middleware(['auth'])->group(function () {
    // Checkout
    Route::post('/checkout', [OrderController::class, 'placeOrder'])->name('checkout');

    // Payment
    Route::post('/pay', [PaymentController::class, 'redirectToGateway'])->name('pay');
    Route::get('/payment/callback', [PaymentController::class, 'handleGatewayCallback']);
    Route::get('/payment/receipt', [PaymentController::class,'receipt']);
});


