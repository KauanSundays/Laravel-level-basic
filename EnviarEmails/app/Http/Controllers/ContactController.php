<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store()
    {
        Mail::to('kauan.nutriport@gmail.com', 'Kauan')->send(new Contact);
    }
}
