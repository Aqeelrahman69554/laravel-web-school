<?php

namespace App\Http\Controllers\visitor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\About;
use App\Models\About2;
use App\Models\Class1;
use App\Models\Class2;
use App\Models\Teacher;
use App\Models\Teacher2;
use App\Models\BlogGrid;
use App\Models\Footer;

class HomeController extends Controller
{
    public function index(){
        $home = Home::first();
        $about = About::first();
        $about2 = About2::all();
        $class1 = Class1::all();
        $classes = Class1::first();
        $class2 = Class2::first();
        $classes2 = Class2::all();
        $teacher = Teacher::first();
        $teachers = Teacher::all();
        $teacher2 = Teacher2::all();
        $bloggrid = BlogGrid::first();
        $bloggrids = BlogGrid::all();
        $footer = Footer::first();
        return view('visitor.index', compact('home', 'about', 'about2', 'class1', 'class2', 'classes2', 'teacher', 'teachers', 'classes', 'teacher2', 'bloggrid', 'bloggrids', 'footer'));
    }
}
