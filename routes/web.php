<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('home-page');
Route::get('/inquiry' ,[IndexController::class, 'inquiry'])->name('inquiry-page');
