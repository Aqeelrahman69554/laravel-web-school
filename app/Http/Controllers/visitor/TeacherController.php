<?php

namespace App\Http\Controllers\visitor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function index(){
        $teacher = Teacher::first();
        $teachers = Teacher::all();
        return view('visitor.pages.teacher', compact('teacher', 'teachers'));

    }
}
