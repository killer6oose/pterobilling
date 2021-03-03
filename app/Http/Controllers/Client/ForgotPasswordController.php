<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    public function show()
    {
        return view('client.forgot', ['title' => 'Forgot Password']);
    }

    public function store(Request $request)
    {
    }
}
