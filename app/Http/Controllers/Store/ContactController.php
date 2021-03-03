<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ContactForm;
use Illuminate\Support\Facades\Mail;
use Extensions\HCaptcha;

class ContactController extends Controller
{
    public function show() {
        return view('store.contact', ['title' => 'Contact Us']);
    }

    public function store(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'name' => 'required|string|min:3|max:40',
            'subject' => 'required|string|min:20|max:250',
            'message' => 'required|string|min:100|max:2000',
        ]);

        $hCaptcha = new HCaptcha(config('hcaptcha.secret_key'));

        if (!$hCaptcha->validateResponse($request->input('h-captcha-response'))) {
            $request->flashExcept('h-captcha-response');
            return view('store.contact', ['title' => 'Contact Us', 'captcha_error' => true]);
        }

        Mail::to(config('app.contact'))->queue(new ContactForm($request->input('email'), $request->input('name'), $request->input('subject'), $request->input('message')));

        return view('store.contact', ['title' => 'Contact Us', 'success' => true]);
    }
}
