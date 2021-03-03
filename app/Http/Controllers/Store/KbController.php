<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KbController extends Controller
{
    public function show($article = null)
    {
        if (is_null($article)) {
            return view('store.kb', ['title' => 'Knowledge Base']);
        } else {
            // Get article info from article ID
            $subject = "Subject of an Example Support Article";
            $body = "Content of an example support article";
            return view('store.article', ['title' => 'Knowledge Base', 'subject' => $subject, 'body' => $body]);
        }
    }
}
