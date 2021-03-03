<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function show(Request $request, $id)
    {
        $referer = $request->header('Referer');

        if (is_null($id)) return (is_null($referer)) ? redirect()->route('home') : redirect($referer);

        session(['country' => $id]);
        
        return (is_null($referer)) ? redirect()->route('home') : redirect($referer);
    }
}
