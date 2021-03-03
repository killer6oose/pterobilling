<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function show()
    {
        return view('client.login', ['title' => 'Login']);
    }

    public function store(Request $request)
    {
    }
}
