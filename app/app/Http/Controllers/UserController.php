<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Config;

class UserController extends Controller
{
    public function __invoke(\Illuminate\Http\Request $request)
    {
        Config::set('database.connections.pgsql.application_name', $request->header('tenant_id'));
        $user = User::all();
        return view('user', ['user' => $user]);
    }
}
