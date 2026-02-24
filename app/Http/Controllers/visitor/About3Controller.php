<?php

namespace App\Http\Controllers\visitor;

use App\Http\Controllers\Controller;
use App\Models\About3;
// use Illuminate\Http\Request;

class About3Controller extends Controller
{
    public function index()
    {
        $about3 = About3::first();

        return view('visitor.pages.about3', compact('about3'));
    }
}
