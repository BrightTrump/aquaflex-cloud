<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Auth\PasswordController;

// Customer Route
Route::middleware(['auth', 'verified','isUser'])->prefix('customer')->group(function () {
    Route::get('/account', [CustomerController::class, 'account']);
    Route::get('/orders', [CustomerController::class, 'orders']);
    Route::get('/edit', [ProfileController::class, 'edit'])->name('edit.profile');

    Route::get('/update-password', [PasswordController::class, 'edit']);

    // Address
    Route::get('/address', [AddressController::class, 'addressBook']);
    Route::get('/address/add', [AddressController::class, 'addAddress']);

    Route::get('/address/edit', [AddressController::class, 'edit'])->name('address.edit')->middleware(['isProfileUpdated']);
    Route::post('/address/edit', [AddressController::class, 'edit'])->name('address.update');

    Route::post('/address/store', [AddressController::class, 'store'])->name('address.store');
});
