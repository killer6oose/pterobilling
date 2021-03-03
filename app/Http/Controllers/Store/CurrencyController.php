<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function show(Request $request, $id)
    {
        $referer = $request->header('Referer');

        session(['currency' => $id]);
        
        return (is_null($referer)) ? redirect()->route('home') : redirect($referer);
    }
}
