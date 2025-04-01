<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MianController;
Route::view('/','home');
Route::get('/teste', [MianController::class, 'index'])->name('teste');
Route::get('/users', [UsersController::class, 'index'])->name('users');
