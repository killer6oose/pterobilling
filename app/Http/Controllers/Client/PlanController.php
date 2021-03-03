<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function show($id)
    {
        // Get server information from the database
        // Get server information from the panel

        $view_variables = array('title' => "Manage Plan | Server #${id} - My Servers", 'header1' => 'My Servers', 'header1_route' => 'client.server.index', 'header2' => "Server #${id}", 'header2_route' => 'client.server.show', 'header_title' => 'Manage Plan', 'id' => $id);
        return view('client.server.plan', $view_variables);
    }

    public function cancel($id)
    {
        $view_variables = array('title' => "Cancel Plan | Server #${id} - My Servers", 'header1' => 'My Servers', 'header1_route' => 'client.server.index', 'header2' => "Server #${id}", 'header2_route' => 'client.server.show', 'header_title' => 'Cancel Plan', 'id' => $id);
        return view('client.server.cancel', $view_variables);
    }

    public function destroy($id)
    {
        // Update server information to the database
        // Update server information to the panel
        
        $view_variables = array('title' => "Server Canceled | Server #${id} - My Servers", 'header1' => 'My Servers', 'header1_route' => 'client.server.index', 'header2' => "Server #${id}", 'header2_route' => 'client.server.show', 'header_title' => 'Server Canceled', 'id' => $id);
        return view('client.server.plan_canceled', $view_variables);
    }

    public function change($id, $plan)
    {
        // Get server information from the database
        // Get server information from the panel

        $view_variables = array('title' => "Change Plan | Server #${id} - My Servers", 'header1' => 'My Servers', 'header1_route' => 'client.server.index', 'header2' => "Server #${id}", 'header2_route' => 'client.server.show', 'header_title' => 'Change Plan', 'id' => $id);
        return view('client.server.change', $view_variables);
    }

    public function store(Request $request, $id)
    {
        // Get form details

        
    }

    public function changed($id)
    {
        // Update server information to the database
        // Update server information to the panel
        
        $view_variables = array('title' => "Plan Changed | Server #${id} - My Servers", 'header1' => 'My Servers', 'header1_route' => 'client.server.index', 'header2' => "Server #${id}", 'header2_route' => 'client.server.show', 'header_title' => 'Plan Changed', 'id' => $id);
        return view('client.server.plan_canceled', $view_variables);
    }
}
