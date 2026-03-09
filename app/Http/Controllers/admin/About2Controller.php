<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About2; // <--- WAJIB ADA
use Illuminate\Support\Facades\Storage;

class About2Controller extends Controller
{
    public function index()
    {
        $data = About2::all();
        return view('admin.pages.about2.index', compact('data'));
    }

    public function create()
    {
        return view('admin.pages.about2.create');
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
            $data['image_1'] = $request->file('image_1')->store('about2', 'public');
        }

        // Handle Upload Image 2
        if ($request->hasFile('image_2')) {
            $data['image_2'] = $request->file('image_2')->store('about2', 'public');
        }

        About2::create($data);

        return redirect()->route('admin.about2.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(About2 $about2)
    {
        return view('admin.pages.about2.edit', compact('about2'));
    }

    public function update(Request $request, About2 $about2)
    {
        $data = $request->all();

        if ($request->hasFile('image_1')) {
            if ($about2->image_1) Storage::disk('public')->delete($about2->image_1);
            $data['image_1'] = $request->file('image_1')->store('about2', 'public');
        }

        if ($request->hasFile('image_2')) {
            if ($about2->image_2) Storage::disk('public')->delete($about2->image_2);
            $data['image_2'] = $request->file('image_2')->store('about2', 'public');
        }

        $about2->update($data);

        return redirect()->route('admin.about2.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy(About2 $about2)
    {
        if ($about2->image_1) Storage::disk('public')->delete($about2->image_1);
        if ($about2->image_2) Storage::disk('public')->delete($about2->image_2);

        $about2->delete();
        return redirect()->route('admin.about2.index')->with('success', 'Data berhasil dihapus');
    }
}
