<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MianController;
Route::view('/','home');
Route::get('/teste', [MianController::class, 'index'])->name('teste');
