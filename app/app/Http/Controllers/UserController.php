<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __invoke($id)
    {
        return view('user', ['user'=>User::FindOrFail($id)]);
    }
}
