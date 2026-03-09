<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BlogGrid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogGridController extends Controller
{
    public function index()
    {
        $data = BlogGrid::all();
        return view('admin.pages.blog_grid.index', compact('data'));
    }

    public function create()
    {
        return view('admin.pages.blog_grid.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'subtitle' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->all();
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('blogs', 'public');
        }

        BlogGrid::create($data);
        return redirect()->route('admin.blog_grid.index')->with('success', 'Berita berhasil diterbitkan');
    }

    public function edit($id)
    {
        $item = BlogGrid::findOrFail($id);
        return view('admin.pages.blog_grid.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = BlogGrid::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('image')) {
            if ($item->image && Storage::disk('public')->exists($item->image)) {
                Storage::disk('public')->delete($item->image);
            }
            $data['image'] = $request->file('image')->store('blogs', 'public');
        }

        $item->update($data);
        return redirect()->route('admin.blog_grid.index')->with('success', 'Berita berhasil diperbarui');
    }

    public function destroy($id)
    {
        $item = BlogGrid::findOrFail($id);
        if ($item->image && Storage::disk('public')->exists($item->image)) {
            Storage::disk('public')->delete($item->image);
        }
        $item->delete();
        return redirect()->route('admin.blog_grid.index')->with('success', 'Berita berhasil dihapus');
    }
}