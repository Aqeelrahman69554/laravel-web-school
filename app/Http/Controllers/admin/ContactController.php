<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $data = Contact::all();
        return view('admin.pages.contact.index', compact('data'));
    }

    public function create()
    {
        return view('admin.pages.contact.create');
    }

    public function store(Request $request)
    {
        Contact::create($request->all());
        return redirect()->route('admin.contact.index')->with('success', 'Kontak berhasil ditambahkan');
    }

    public function edit($id)
    {
        $item = Contact::findOrFail($id);
        return view('admin.pages.contact.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = Contact::findOrFail($id);
        $item->update($request->all());
        return redirect()->route('admin.contact.index')->with('success', 'Kontak berhasil diperbarui');
    }

    public function destroy($id)
    {
        Contact::findOrFail($id)->delete();
        return redirect()->route('admin.contact.index')->with('success', 'Kontak berhasil dihapus');
    }
}
