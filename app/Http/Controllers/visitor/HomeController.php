<?php

namespace App\Http\Controllers\visitor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\About;

class HomeController extends Controller
{
    public function index(){
        $home = Home::first();
        $about = About::first();
        return view('visitor.index', compact('home', 'about'));
    }
}
