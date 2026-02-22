<?php

namespace App\Http\Controllers\visitor;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Teacher2;

class TeacherController extends Controller
{
    public function index(){
        $teacher = Teacher::first();
        $teachers = Teacher::all();
        $teacher2 = Teacher2::all();
        return view('visitor.pages.bos.teacher_page', compact('teacher', 'teachers','teacher2'));

    }
}
