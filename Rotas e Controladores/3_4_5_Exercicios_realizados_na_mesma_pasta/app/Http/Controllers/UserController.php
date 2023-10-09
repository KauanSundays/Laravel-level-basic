<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); // Supondo que você tenha um modelo User para representar os usuários

        return view('index', compact('users'));
    }
    }

    