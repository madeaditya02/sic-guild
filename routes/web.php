<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/stories', [HomeController::class, 'stories']);
Route::get('/stories/{id}', [HomeController::class, 'detailPost']);
Route::get('/dashboard', [PostController::class, 'index']);
Route::get('/dashboard/create', [PostController::class, 'create']);
Route::get('/dashboard/edit', [PostController::class, 'edit']);

Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'loginPost'])->name('login.post');

Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/register', [AuthController::class, 'register']);

Route::post('/register', [AuthController::class, 'registerPost'])->name('register.post');

Route::get('/profile', [AuthController::class, 'profile']);
