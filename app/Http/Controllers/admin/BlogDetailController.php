<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogDetailController extends Controller
{
    public function index()
    {
        $data = BlogDetail::all();
        return view('admin.pages.blog_detail.index', compact('data'));
    }

    public function create()
    {
        return view('admin.pages.blog_detail.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        if ($request->hasFile('image_1')) {
            $data['image_1'] = $request->file('image_1')->store('blog', 'public');
        }
        if ($request->hasFile('image_2')) {
            $data['image_2'] = $request->file('image_2')->store('blog', 'public');
        }

        BlogDetail::create($data);
        return redirect()->route('admin.pages.blog_detail.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $item = BlogDetail::findOrFail($id);
        return view('admin.pages.blog_detail.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = BlogDetail::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('image_1')) {
            if ($item->image_1) Storage::disk('public')->delete($item->image_1);
            $data['image_1'] = $request->file('image_1')->store('blog', 'public');
        }
        
        if ($request->hasFile('image_2')) {
            if ($item->image_2) Storage::disk('public')->delete($item->image_2);
            $data['image_2'] = $request->file('image_2')->store('blog', 'public');
        }

        $item->update($data);
        return redirect()->route('admin.blog_detail.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        $item = BlogDetail::findOrFail($id);
        if ($item->image_1) Storage::disk('public')->delete($item->image_1);
        if ($item->image_2) Storage::disk('public')->delete($item->image_2);
        
        $item->delete();
        return redirect()->route('admin.blog_detail.index')->with('success', 'Data berhasil dihapus');
    }
}