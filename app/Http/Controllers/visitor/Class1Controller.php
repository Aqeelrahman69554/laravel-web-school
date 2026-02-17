<?php

namespace App\Http\Controllers\visitor;

use App\Http\Controllers\Controller;
use App\Models\Class1;
use Illuminate\Http\Request;

class Class1Controller extends Controller
{
    public function index(){
        $class1 = Class1::first();
        $classes = Class1::all();
        return view('visitor.pages.class1', compact('class1', 'classes'));
    }
}
