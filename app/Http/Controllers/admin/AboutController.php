<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\About; // Pastikan Model About sudah ada
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index()
    {
        $data = About::latest()->get();
        return view('admin.pages.about.index', compact('data'));
    }

    public function create()
    {
        return view('admin.pages.about.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image_1' => 'image|mimes:jpeg,png,jpg|max:2048',
            'image_2' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->all();

        // Handle Upload Image 1
        if ($request->hasFile('image_1')) {
            $data['image_1'] = $request->file('image_1')->store('upload/about', 'public');
        }

        // Handle Upload Image 2
        if ($request->hasFile('image_2')) {
            $data['image_2'] = $request->file('image_2')->store('upload/about', 'public');
        }

        // List disimpan sebagai array (pastikan cast array di Model)
        // Jika input list datang dari form sebagai array: <input name="list[]">
        $data['list'] = $request->list;

        About::create($data);

        return redirect()->route('admin.pages.about.index')->with('success', 'Data About berhasil ditambahkan');
    }

    public function edit($id)
    {
        $about = About::findOrFail($id);
        return view('admin.pages.about.edit', compact('about'));
    }

    public function update(Request $request, $id)
    {
        $about = About::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('image_1')) {
            if ($about->image_1) Storage::disk('public')->delete($about->image_1);
            $data['image_1'] = $request->file('image_1')->store('upload/about', 'public');
        }

        if ($request->hasFile('image_2')) {
            if ($about->image_2) Storage::disk('public')->delete($about->image_2);
            $data['image_2'] = $request->file('image_2')->store('upload/about', 'public');
        }

        $about->update($data);

        return redirect()->route('admin.about.index')->with('success', 'Data About berhasil diperbarui');
    }

    public function destroy($id)
    {
        $about = About::findOrFail($id);
        if ($about->image_1) Storage::disk('public')->delete($about->image_1);
        if ($about->image_2) Storage::disk('public')->delete($about->image_2);
        
        $about->delete();
        return redirect()->route('admin.about.index')->with('success', 'Data berhasil dihapus');
    }
}