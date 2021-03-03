<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SoftwareController extends Controller
{
    public function show($id)
    {
        // Get server information from the database
        // Get server information from the panel

        $view_variables = array('title' => "Software Installer | Server #${id} - My Servers", 'header1' => 'My Servers', 'header1_route' => 'client.server.index', 'header2' => "Server #${id}", 'header2_route' => 'client.server.show', 'header_title' => 'Software Installer', 'id' => $id);
        return view('client.server.software', $view_variables);
    }

    public function store(Request $request, $id)
    {
        // Get form details
        // Save to the database
    }
}
