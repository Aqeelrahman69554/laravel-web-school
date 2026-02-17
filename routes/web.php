<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\visitor\HomeController;
use App\Http\Controllers\visitor\AboutController;
use App\Http\Controllers\visitor\About2Controller;
use App\Http\Controllers\visitor\Class1Controller;
use App\Http\Controllers\visitor\Class2Controller;
use App\Http\Controllers\visitor\TeacherController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::name('visitor.')->group(function (){

    // HOME
    Route::get('/', [HomeController::class, 'index'])->name('home');

    // ABOUT
    Route::get('/about', [AboutController::class, 'index'])->name('about');

    // ABOUT2
    Route::get('/', [AboutController::class, 'index'])->name('about2');

    //CLASS1
    Route::get('/', [Class1Controller::class, 'index'])->name('class1');

    //CLASS2
    Route::get('/', [Class2Controller::class, 'index'])->name('class2');

    //TEACHER
    Route::get('/', [TeacherController::class, 'indekx'])->name('teacher');


});
