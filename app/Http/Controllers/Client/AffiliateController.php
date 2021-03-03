<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AffiliateController extends Controller
{
    public function show()
    {
        // Get data from the database
        return view('client.affiliate', ['title' => 'Affiliate Program']);
    }

    public function store(Request $request)
    {
        // Save data to the database
    }
}
