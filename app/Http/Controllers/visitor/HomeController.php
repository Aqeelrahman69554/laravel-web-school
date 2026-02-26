<?php

namespace App\Http\Controllers\visitor;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\About;
use App\Models\About2;
use App\Models\About3;
use App\Models\Class1;
use App\Models\Class2;
use App\Models\Teacher;
use App\Models\Teacher2;
use App\Models\BlogGrid;
use App\Models\BlogDetail;
use App\Models\BlogDetail2;
use App\Models\Gallery;
use App\Models\Footer;
use App\Models\Contact;

class HomeController extends Controller
{
    public function index(){
        $home = Home::first();
        $about = About::first();
        $about2 = About2::all();
        $about3 = About3::first();
        $class1 = Class1::first();
        $classes = Class1::all();
        $class2 = Class2::first();
        $classes2 = Class2::all();
        $teacher = Teacher::first();
        $teachers = Teacher::all();
        $teacher2 = Teacher2::all();
        $bloggrid = BlogGrid::first();
        $bloggrids = BlogGrid::all();
        $blogdetail = BlogDetail::first();
        $blogdetail2 = BlogDetail2::first();
        $gallery = Gallery::all();
        $contact = Contact::first();
        $footer = Footer::first();
        return view('visitor.index', compact('home', 'about', 'about2', 'about3', 'class1', 'class2', 'classes2', 'teacher', 'teachers', 'classes', 'teacher2', 'bloggrid', 'bloggrids', 'blogdetail','blogdetail2','gallery', 'footer', 'contact'));
    }
}
