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
Route::get('/register', [AuthController::class, 'register']);
Route::get('/profile', [AuthController::class, 'profile']);
