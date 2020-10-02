<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function __invoke(\Illuminate\Http\Request $request)
    {
        $user = User::all();
        return view('user', ['user' => $user]);
    }
}
