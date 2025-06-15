<?php

use App\Http\Controllers\Frontend\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/journal', function () {
    return view('frontend.journal');
});
Route::get('/ledger', function () {
    return view('frontend.ledger');
});
Route::get('/trial-balance', function () {
    return view('frontend.trial-balance');
});
