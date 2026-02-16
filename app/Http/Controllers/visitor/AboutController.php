<?php

namespace App\Http\Controllers\visitor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function index(){
        $about = About::first();
        return view('visitor.pages.about', compact('about'));
    }
}
