<?php

// VISITOR
use Illuminate\Support\Facades\Route;

//VISITOR
use App\Http\Controllers\visitor\HomeController;
use App\Http\Controllers\visitor\AboutController;
use App\Http\Controllers\visitor\About2Controller;
use App\Http\Controllers\visitor\About3Controller;
use App\Http\Controllers\visitor\Class1Controller;
use App\Http\Controllers\visitor\Class2Controller;
use App\Http\Controllers\visitor\TeacherController;
use App\Http\Controllers\visitor\Teacher2Controller;
use App\Http\Controllers\visitor\FooterController;
use App\Http\Controllers\visitor\ContactController;
use App\Http\Controllers\visitor\BlogGridController;
use App\Http\Controllers\visitor\BlogDetailController;
use App\Http\Controllers\visitor\BlogDetail2Controller;
use App\Http\Controllers\visitor\GalleryController;

use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\auth\DashboardController;

// use App\Models\BlogGridDetail1;

// ADMIN
use App\Http\Controllers\admin\HomeController as AdminHomeController;
use App\Http\Controllers\admin\AboutController as AdminAboutController;
use App\Http\Controllers\admin\About2Controller as AdminAbout2Controller;
use App\Http\Controllers\admin\About3Controller as AdminAbout3Controller;
use App\Http\Controllers\admin\Class1Controller as AdminClass1Controller;
use App\Http\Controllers\admin\Class2Controller as AdminClass2Controller;
use App\Http\Controllers\admin\TeacherController as AdminTeacherController;
use App\Http\Controllers\admin\Teacher2Controller as AdminTeacher2Controller;
use App\Http\Controllers\admin\FooterController as AdminFooterController;
use App\Http\Controllers\admin\ContactController as AdminContactController;
use App\Http\Controllers\admin\BlogGridController as AdminBlogGridController;
use App\Http\Controllers\admin\BlogDetailController as AdminBlogDetailController;
use App\Http\Controllers\admin\BlogDetail2Controller as AdminBlogDetail2Controller;
use App\Http\Controllers\admin\GalleryController as AdminGalleryController;


// VISITOR
Route::name('visitor.')->group(function () {

    // HOME
    Route::get('/', [HomeController::class, 'index'])->name('home');

    // ABOUT
    Route::get('/about', [AboutController::class, 'index'])->name('about');

    // ABOUT2
    Route::get('/about2', [About2Controller::class, 'index'])->name('about2');

    //BLOG ABOUT3
    Route::get('/about3', [About3Controller::class, 'index'])->name('about3');

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

    //BLOG GRID
    Route::get('/blog_grid', [BlogGridController::class, 'index'])->name('blog_grid');

    //BLOG DETAIL
    Route::get('/blog_detail', [BlogDetailController::class, 'index'])->name('blog_detail');

    //BLOG DETAIL2
    Route::get('/blog_detail2', [BlogDetail2Controller::class, 'index'])->name('blog_detail2');

    //GALLERY
    Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

    //FOOTER
    Route::get('/footer', [FooterController::class, 'index'])->name('footer');
});

Route::get('/login', fn() => view('auth.login'))->name('login');
Route::post('/auth', [AuthController::class, 'login']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/dash_about', fn() => view('admin.pages.dash_about'))->name('dash_about');

Route::post('/login', [AuthController::class, 'login'])->name('login');
