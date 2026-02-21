<?php

namespace App\Http\Controllers\visitor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\About2;

class AboutController extends Controller
{
    public function index(){
        $about = About::first();
        $about2 = About2::all();
        return view('visitor.pages.bos.about_page', compact('about', 'about2'));
    }
}
