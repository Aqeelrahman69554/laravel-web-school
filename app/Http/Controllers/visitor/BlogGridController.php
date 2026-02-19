<?php

namespace App\Http\Controllers\visitor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogGrid;

class BlogGridController extends Controller
{
    public function index(){
    $bloggrid = BlogGrid::first();
    $bloggrids = BlogGrid::all();
    return view('visitor.pages.blog_grid', compact('bloggrid', 'bloggrids'));
    }
}
