<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddonController extends Controller
{
    public function show($id)
    {
        // Get server information from the database
        // Get server information from the panel

        $view_variables = array('title' => "Add-ons | Server #${id} - My Servers", 'header1' => 'My Servers', 'header1_route' => 'client.server.index', 'header2' => "Server #${id}", 'header2_route' => 'client.server.show', 'header_title' => 'Add-ons', 'id' => $id);
        return view('client.server.addon', $view_variables);
    }

    public function remove($id)
    {
        $view_variables = array('title' => "Remove Add-on | Server #${id} - My Servers", 'header1' => 'My Servers', 'header1_route' => 'client.server.index', 'header2' => "Server #${id}", 'header2_route' => 'client.server.show', 'header_title' => 'Remove Add-on', 'id' => $id);
        return view('client.server.remove', $view_variables);
    }

    public function destroy($id)
    {
        // Update server information to the database
        // Update server information to the panel
        
        $view_variables = array('title' => "Add-on Removed | Server #${id} - My Servers", 'header1' => 'My Servers', 'header1_route' => 'client.server.index', 'header2' => "Server #${id}", 'header2_route' => 'client.server.show', 'header_title' => 'Add-on Removed', 'id' => $id);
        return view('client.server.removed', $view_variables);
    }

    public function add($id, $plan)
    {
        // Get server information from the database
        // Get server information from the panel

        $view_variables = array('title' => "Add Add-on | Server #${id} - My Servers", 'header1' => 'My Servers', 'header1_route' => 'client.server.index', 'header2' => "Server #${id}", 'header2_route' => 'client.server.show', 'header_title' => 'Add add-on', 'id' => $id);
        return view('client.server.add', $view_variables);
    }

    public function store(Request $request, $id)
    {
        // Get form details

        
    }

    public function added($id)
    {
        // Update server information to the database
        // Update server information to the panel
        
        $view_variables = array('title' => "Add-on Added | Server #${id} - My Servers", 'header1' => 'My Servers', 'header1_route' => 'client.server.index', 'header2' => "Server #${id}", 'header2_route' => 'client.server.show', 'header_title' => 'Add-on Added', 'id' => $id);
        return view('client.server.added', $view_variables);
    }
}
