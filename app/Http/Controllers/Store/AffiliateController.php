<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AffiliateController extends Controller
{
    public function show($id)
    {
        session(['aff_referrer' => $id]);
        
        return redirect()->route('home');
    }
}
