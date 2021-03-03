<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function show($id)
    {
        return view('store.order', ['title' => 'Order Server', 'id' => $id]);
    }

    public function store(Request $request)
    {

    }
}
