<?php

namespace App\Http\Controllers\visitor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
// use App\Models\Footer;
// use App\Models\Home;


class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::first();
        // $footer = Footer::first();
        // $home = Home::first();
        return view('visitor.pages.bos.contact_page', compact('contact'));
    }
}
