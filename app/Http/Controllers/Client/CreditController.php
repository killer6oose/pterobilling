<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreditController extends Controller
{
    public function show()
    {
        // Get data from the database
        return view('client.credit', ['title' => 'Account Credit']);
    }

    public function store()
    {
        // Pass data to the payment gateway
    }

    public function added()
    {
        // Save data to the database
        $view_variables = array('title' => 'Credit Added - Account Credit', 'header1' => 'Account Credit', 'header1_route' => 'client.credit', 'header_title' => 'Credit Added');
        return view('client.credit_added', $view_variables);
    }
}
