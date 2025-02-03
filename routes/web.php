<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;


Route::middleware('auth')->group(function () {
    // profile routes
    Route::get('/profile', [ProfileController::class, 'show'])->name('profiles.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profiles.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profiles.update');
    Route::get('/profile/password', [ProfileController::class, 'password_reset'])->name('resetPassword');
    Route::put('/profile/password', [ProfileController::class, 'password_update'])->name('updatePassword');

    // home route
    Route::view('/', 'home')->name('home');
    // resources routes
    Route::post('reservations/{livre}', [ReservationController::class, 'store'])->name('reservations.store');
    Route::resource('livres', LivreController::class);
    Route::resource('categories', CategorieController::class);
});

Route::middleware('guest')->group(function () {
    // Auth routes
    Route::get('/login', [SessionController::class, 'create']);
    Route::post('/login', [SessionController::class, 'login'])->name('login');
    Route::get('/register', [UserController::class, 'create']);
    Route::post('/register', [UserController::class, 'store'])->name('register');
});
