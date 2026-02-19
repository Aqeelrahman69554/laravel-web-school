<?php

namespace App\Http\Controllers\visitor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Class2;

class Class2Controller extends Controller
{
    public function index(){
        $Class2 = Class2::first();
        return view('visitor.pages.class2', compact('class2'));
    }
}
