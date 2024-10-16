<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = \App\Models\User::paginate(10);

        return view('user.index', ['type_menu' => 'user', 'users' => $users, ]);

    }
}
