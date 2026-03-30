<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Class1;
use App\Models\Teacher;
use App\Models\BlogGrid;
use App\Models\Gallery;

class DashboardController extends Controller
{
    public function index()
    {
        $countFakultas = Class1::count();
        $countPengajar = Teacher::count();
        $countPrestasi = BlogGrid::count();
        $countGallery = Gallery::count();
        return view('admin.pages.dashboard.index', compact('countFakultas','countPengajar','countPrestasi','countGallery'));
    }
}
