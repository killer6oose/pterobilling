<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        // Get data from the database
        return view('client.invoice.index', ['title' => 'Invoices']);
    }

    public function show($id)
    {
        // Get data from the database
        $view_variables = array('title' => "Invoice #${id} - Invoices", 'header1' => 'Invoices', 'header1_route' => 'client.invoice.index', 'header_title' => "Invoice #${id}", 'id' => $id);
        return view('client.invoice.show', $view_variables);
    }

    public function print($id)
    {
        // Get data from the database
        return view('mail.invoice', ['title' => "Invoice #${id} - Invoices", 'id' => $id]);
    }

    public function store(Request $request, $id)
    {
        // Pass data to payment gateway extensions
    }

    public function paid($id)
    {
        // Save data to the database
        $view_variables = array('title' => "Invoice #${id} - Invoices", 'header1' => 'Invoices', 'header1_route' => 'client.invoice.index', 'header2' => "Invoice #${id}", 'header2_route' => 'client.invoice.show', 'header_title' => "Invoice Paid", 'id' => $id);
        return view('client.invoice.paid', $view_variables);
    }
}
