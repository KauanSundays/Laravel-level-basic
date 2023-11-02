<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;

class HomneController extends controller
{
    public function index()
    {
        return view('adminPage');
    }
}
