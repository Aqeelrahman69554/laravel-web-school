<?php

namespace App\Http\Controllers\visitor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Contact_2;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::first(); // ambil data halaman
        return view('visitor.pages.bos.contact_page', compact('contact'));
    }

    public function store(Request $request)
    {
        // validasi
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // simpan pesan visitor
        Contact_2::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        return back()->with('success', 'Pesan berhasil dikirim!');
    }
}
