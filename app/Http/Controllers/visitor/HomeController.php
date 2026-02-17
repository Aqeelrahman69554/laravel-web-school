<?php

namespace App\Http\Controllers\visitor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\About;
use App\Models\About2;
use App\Models\Class1;
use App\Models\Teacher;

class HomeController extends Controller
{
    public function index(){
        $home = Home::first();
        $about = About::first();
        $about2 = About2::all();
        $class1 = Class1::all();
        $clasess = Class1::first();
        $teacher = Teacher::first();
        $teachers = Teacher::all();
        return view('visitor.index', compact('home', 'about', 'about2', 'class1', 'teacher', 'teachers', 'clasess'));
    }
}
