<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

// Customer Route
Route::middleware(['auth', 'verified','isUser'])->prefix('customer')->group(function () {
    Route::get('/account', [CustomerController::class, 'account']);
    Route::get('/orders', [CustomerController::class, 'orders']);
});

