<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        Route::resource('posts', PostController::class);
    });
    Route::get('/profile', [AuthController::class, 'profile'])->name('profile');
    Route::post('/profile', [AuthController::class, 'profilePost'])->name('profile.post');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login.post');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register.post');
});

Route::middleware('admin')->group(function() {
    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        Route::resource('users', UserController::class);
        Route::resource('categories', CategoryController::class);
    });
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/stories', [HomeController::class, 'stories'])->name('stories');
Route::get('/stories/{post}', [HomeController::class, 'storiesDetail'])->name('stories.show');