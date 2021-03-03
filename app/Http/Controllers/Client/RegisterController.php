<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function show()
    {
        return view('client.register', ['title' => 'Register']);
    }

    public function store(Request $request)
    {
    }
}
