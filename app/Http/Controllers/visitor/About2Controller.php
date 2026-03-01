<?php

namespace App\Http\Controllers\visitor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About2;
use App\Models\About3;

class About2Controller extends Controller
{
    public function index(){
        $about2 = About2::all();
        $about3 = About3::first();

        
        return view('visitor.pages.about2', compact('about2'));
    }
}
