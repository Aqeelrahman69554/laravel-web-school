<?php

namespace App\Http\Controllers\visitor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Footer;

class FooterController extends Controller
{
    public function index(){
        $footer = Footer::first();
        return view('visitor.components.footer', compact('footer'));
    }
}
