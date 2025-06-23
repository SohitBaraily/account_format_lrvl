<?php

use App\Http\Controllers\Frontend\GoogleLoginController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/journal', [PageController::class, 'journal'])->name('journal');
Route::get('/ledger', [PageController::class, 'ledger'])->name('ledger');
Route::get('/trial-balance', [PageController::class, 'trial_balance'])->name('trial-balance');
Route::middleware(['auth'])->group(function () {
    Route::get('/subscription', [UserController::class, 'subscription'])->name('subscription');
    Route::post('/payment', [UserController::class, 'payment'])->name('payment');
    Route::get('/khalti', [UserController::class, 'khalti']);
});


Route::get('/google/redirect', [GoogleLoginController::class, 'redirectToGoogle'])->name('google.redirect');
Route::get('/google/callback', [GoogleLoginController::class, 'handleGoogleCallback'])->name('google.callback');
