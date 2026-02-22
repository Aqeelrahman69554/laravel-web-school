<?php

namespace App\Http\Controllers\visitor;

use App\Http\Controllers\Controller;
use App\Models\Class1;
use App\Models\Class2;
// use Illuminate\Http\Request;

class Class1Controller extends Controller
{
    public function index(){
        $class1 = Class1::first();
        $classes = Class1::all();
        $class2 = Class2::first();
        
        return view('visitor.pages.bos.class_page', compact('class1', 'classes', 'class2'));
    }
}
