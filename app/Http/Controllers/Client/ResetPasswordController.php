<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    public function show()
    {
        return view('client.reset', ['title' => 'Reset Password']);
    }

    public function store(Request $request)
    {
    }
}
