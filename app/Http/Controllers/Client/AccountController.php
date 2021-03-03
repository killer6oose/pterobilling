<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function show()
    {
        return view('client.account', ['title' => 'Account Settings']);
    }

    public function store(Request $request)
    {
        // Save data to the database
    }

    public function destroy()
    {
        //
    }
}
