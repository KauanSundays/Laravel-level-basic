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

    public function store(Request $request)
    {
        Mail::to(users: 'kauan.nutriport@gmail.com', name: 'Kauan')->send(new Contact(data: [
                'fromName' => $request->input('name'),
            ]
        ));
    }
}
