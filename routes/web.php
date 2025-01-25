<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;

Route::resource('livres', LivreController::class);
Route::resource('categories', CategorieController::class);

// Auth routes
Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'login'])->name('login');
Route::get('/register', [UserController::class, 'create']);
Route::post('/register', [UserController::class, 'store'])->name('register');
