<?php

namespace App\Http\Controllers\visitor;

use App\Http\Controllers\Controller;
use App\Models\BlogDetail;
use App\Models\BlogDetail2;
// use Illuminate\Http\Request;

class BlogDetailController extends Controller
{
    public function index(){
        $blogdetail = BlogDetail::first();
        $blogdetail2 = BlogDetail2::first();

        return view('visitor.pages.bos.blogDetail_page', compact('blogdetail', 'blogdetail2'));
    }
}
