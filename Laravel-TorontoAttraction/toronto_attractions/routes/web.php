<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\AttractionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Authentication Routes
Auth::routes();

// Public Routes
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Admin Routes
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    // CRUD routes for Address and Attraction accessible by admins
    Route::resource('addresses', AddressController::class);
    Route::resource('attractions', AttractionController::class);
});

// User Routes
Route::middleware('auth')->group(function () {
    // User Dashboard
    Route::get('/dashboard', [UserController::class, 'index'])->name('user.dashboard');

    // Read-only routes for Address and Attraction accessible by users
    Route::get('addresses', [AddressController::class, 'index'])->name('addresses.index');
    Route::get('addresses/{address}', [AddressController::class, 'show'])->name('addresses.show');

    Route::get('attractions', [AttractionController::class, 'index'])->name('attractions.index');
    Route::get('attractions/{attraction}', [AttractionController::class, 'show'])->name('attractions.show');
});

// Home Route
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
