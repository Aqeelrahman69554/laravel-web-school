<?php

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

//ADMIN
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\AboutController as AdminAboutController;
use App\Http\Controllers\Admin\About2Controller as AdminAbout2Controller;
use App\Http\Controllers\Admin\About3Controller as AdminAbout3Controller;
use App\Http\Controllers\Admin\Class1Controller as AdminClass1Controller;
use App\Http\Controllers\Admin\Class2Controller as AdminClass2Controller;
use App\Http\Controllers\Admin\TeacherController as AdminTeacherController;
use App\Http\Controllers\Admin\Teacher2Controller as AdminTeacher2Controller;
use App\Http\Controllers\Admin\FooterController as AdminFooterController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\BlogGridController as AdminBlogGridController;
use App\Http\Controllers\Admin\BlogDetailController as AdminBlogDetailController;
use App\Http\Controllers\Admin\BlogDetail2Controller as AdminBlogDetail2Controller;
use App\Http\Controllers\Admin\GalleryController as AdminGalleryController;
// use App\Models\BlogGridDetail1;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::name('admin.')->group(function (){

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

Route::name('admin.')->group(function (){

    // HOME
    Route::get('/', [AdminHomeController::class, 'index'])->name('home');

    // // ABOUT
    // Route::get('/about', [AdminAboutController::class, 'index'])->name('about');

    // // ABOUT2
    // Route::get('/about2', [AdminAbout2Controller::class, 'index'])->name('about2');
    
    // //BLOG ABOUT3
    // Route::get('/about3', [AdminAbout3Controller::class, 'index'])->name('about3');
    
    // //CLASS1
    // Route::get('/class1', [AdminClass1Controller::class, 'index'])->name('class1');

    // //CLASS2
    // Route::get('/class2', [AdminClass2Controller::class, 'index'])->name('class2');

    // //TEACHER
    // Route::get('/teacher', [AdminTeacherController::class, 'index'])->name('teacher');
    
    // //TEACHER2
    // Route::get('/teacher2', [AdminTeacher2Controller::class, 'index'])->name('teacher2');
    
    // //CONTACT
    // Route::get('/contact', [AdminContactController::class, 'index'])->name('contact');

    // //BLOG GRID
    // Route::get('/blog_grid', [AdminBlogGridController::class, 'index'])->name('blog_grid');
    
    // //BLOG DETAIL
    // Route::get('/blog_detail', [AdminBlogDetailController::class, 'index'])->name('blog_detail');
    
    // //BLOG DETAIL2
    // Route::get('/blog_detail2', [AdminBlogDetail2Controller::class, 'index'])->name('blog_detail2');
    
    // //GALLERY
    // Route::get('/gallery', [AdminGalleryController::class, 'index'])->name('gallery');
    
    // //FOOTER
    // Route::get('/footer', [AdminFooterController::class, 'index'])->name('footer');
});
