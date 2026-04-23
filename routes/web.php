<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\CollaborationsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('home-page');
Route::get('/inquiry' ,[IndexController::class, 'inquiry'])->name('inquiry-page');
Route::get('/our-story' ,[IndexController::class, 'ourStory'])->name('our-story-page');

Route::prefix('collaborations')->group(function(){
    Route::get('/' ,[CollaborationsController::class, 'index'])->name('collaboration-page');
    Route::get('/gerobok-cendayam' ,[CollaborationsController::class, 'gerobokCendayam'])->name('collaboration-gerobok-cendayam-page');
    Route::get('/kimpton-naluria' ,[CollaborationsController::class, 'kimptonNaluria'])->name('collaboration-kimpton-naluria-page');
});