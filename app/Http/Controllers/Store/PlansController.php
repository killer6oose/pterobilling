<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlansController extends Controller
{
    public function show($id = null) {
        if (is_null($id)) {
            return view('store.plans', ['title' => 'Server Plans']);
        } else {
            $category = $id;
            return view('store.plans', ['title' => 'Server Plans', 'category' => $category]);
        }
    }
}
