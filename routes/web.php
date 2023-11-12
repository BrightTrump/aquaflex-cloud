<?php

use App\Http\Controllers\NavigationController;
use App\Http\Controllers\OrderFromStoreController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/services', [NavigationController::class,'services']);
Route::get('/about', [NavigationController::class,'about']);
Route::get('/faqs', [NavigationController::class,'faqs']);
Route::get('/team', [NavigationController::class,'team']);
Route::get('contact', [NavigationController::class,'contact']);

Route::get('/product-single', function () {
    return view('product-single');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/order-history', [ProfileController::class, 'orderHistory'])->name('order_history');
    Route::get('/order-details', [ProfileController::class, 'orderDetails'])->name('order_details');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/product/add', [ProductsController::class, 'create']);
    Route::post('/product/add', [ProductsController::class, 'store'])->name('product.add');
});

// Shop from store
Route::middleware(['auth', 'isAdminOrSaleManager'])->group(function () {
    Route::get('/store/order', [OrderFromStoreController::class, 'index']);
});


require __DIR__ . '/auth.php';
require __DIR__ . '/custom/shop.php';
