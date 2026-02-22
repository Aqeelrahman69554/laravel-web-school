<?php

namespace App\Http\Controllers\visitor;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
use App\Models\Teacher2;

class Teacher2Controller extends Controller
{
    public function index(){
    $teacher2 = Teacher2::all();
    return view('visitor.pages.teacher2', compact('teacher2'));
    }
}
