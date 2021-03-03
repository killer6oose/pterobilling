<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        // Get data from the database
        return view('client.ticket.index', ['title' => 'Support Tickets']);
    }

    public function show($id)
    {
        // Get data from the database
        $view_variables = array('title' => "Ticket ${id} - Support Tickets", 'header1' => 'Support Tickets', 'header1_route' => 'client.ticket.index', 'header_title' => "Ticket ${id}", 'id' => $id);
        return view('client.ticket.show', $view_variables);
    }

    public function update(Request $request, $id)
    {
        // Save data to the database
    }

    public function create()
    {
        $view_variables = array('title' => 'Create Ticket - Support Tickets', 'header1' => 'Support Tickets', 'header1_route' => 'client.ticket.index', 'header_title' => 'Create Ticket');
        return view('client.ticket.create', $view_variables);
    }

    public function store(Request $request, $id)
    {
        // Save the new ticket to the database
    }
}
