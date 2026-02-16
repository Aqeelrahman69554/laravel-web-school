<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\visitor\HomeController;
use App\Http\Controllers\visitor\AboutController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::name('visitor.')->group(function (){

    // HOME
    Route::get('/', [HomeController::class, 'index'])->name('home');

    // ABOUT
    Route::get('/about', [AboutController::class, 'index'])->name('about');

    // ABOUT2


});
