<?php

namespace App\Http\Controllers\visitor;

use App\Http\Controllers\Controller;
use App\Models\BlogDetail2;
// use Illuminate\Http\Request;

class BlogDetail2Controller extends Controller
{
    public function index()
    {
        $blogdetail2 = BlogDetail2::first();

        return view('visitor.pages.blog_detail2', compact('blogdetail2'));
    }
}
