<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\visitor\HomeController;
use App\Http\Controllers\visitor\AboutController;
use App\Http\Controllers\visitor\About2Controller;
use App\Http\Controllers\visitor\Class1Controller;
use App\Http\Controllers\visitor\Class2Controller;
use App\Http\Controllers\visitor\TeacherController;
use App\Http\Controllers\visitor\Teacher2Controller;
use App\Http\Controllers\visitor\FooterController;
use App\Http\Controllers\visitor\ContactController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::name('visitor.')->group(function (){

    // HOME
    Route::get('/', [HomeController::class, 'index'])->name('home');

    // ABOUT
    Route::get('/about', [AboutController::class, 'index'])->name('about');

    // ABOUT2
    Route::get('/about2', [About2Controller::class, 'index'])->name('about2');

    //CLASS1
    Route::get('/class1', [Class1Controller::class, 'index'])->name('class1');

    //CLASS2
    Route::get('/class2', [Class2Controller::class, 'index'])->name('class2');

    //TEACHER
    Route::get('/teacher', [TeacherController::class, 'index'])->name('teacher');
    
    //TEACHER2
    Route::get('/teacher2', [Teacher2Controller::class, 'index'])->name('teacher2');
    
    //CONTACT
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
    
    //FOOTER
    Route::get('/footer', [FooterController::class, 'index'])->name('footer');
});
