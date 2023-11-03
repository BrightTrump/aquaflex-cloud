<?php

use App\Http\Controllers\Access\AdminController;
use App\Http\Controllers\SaleManagerController;
use Illuminate\Support\Facades\Route;

Route::prefix('staff/admin')->middleware(['auth','isAdmin'])->group(function () {
    Route::get('/dashboard', [AdminController::class,'index'])->name('access.admin.dashboard');
});

Route::prefix('staff/sale')->middleware(['auth','isSaleManager'])->group(function () {
    Route::get('/dashboard', [SaleManagerController::class,'index'])->name('access.salemanager.dashboard');
});