<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
Route::get('/dashboard', [UserController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/my-shop', [ShopController::class, 'index'])->middleware('auth')->name('my-shop');
Route::get('/my-shop/add-product', [ShopController::class, 'showAddProduct'])->middleware('auth')->name('my-shop.add-product');
Route::post('/my-shop/add-product', [ShopController::class, 'addProduct'])->middleware('auth')->name('my-shop.add-product');


require __DIR__ . '/auth.php';
