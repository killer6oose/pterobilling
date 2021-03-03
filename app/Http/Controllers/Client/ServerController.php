<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServerController extends Controller
{
    public function index()
    {
        // Get server information from the database
        // Get server information from the panel

        return view('client.server.index', ['title' => 'My Servers']);
    }

    public function show($id)
    {
        // Get server information from the database
        // Get server information from the panel

        

        $view_variables = array('title' => "Server Info | Server #${id} - My Servers", 'header1' => 'My Servers', 'header1_route' => 'client.server.index', 'header2' => "Server #${id}", 'header2_route' => 'client.server.show', 'header_title' => 'Server Info', 'id' => $id);

        // FOR TESTING ONLY -- START
        if ($id == 'pending') {
            return view('client.server.pending', $view_variables);
        } elseif ($id == 'suspended') {
            return view('client.server.suspended', $view_variables);
        } elseif ($id == 'canceled') {
            return view('client.server.canceled', $view_variables);
        }
        // FOR TESTING ONLY -- END

        return view('client.server.show', $view_variables);
    }
}
