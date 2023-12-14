<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;

class contactcontroller extends Controller
{
    
    public function showContactForm()
    {
        return view('contact');
    }

    public function sendContactMail(Request $request)
    {
        $contactData = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ];

        Mail::to('sathishkumar19012003@gmail.com')->send(new ContactFormMail($contactData));
        return redirect()->back()->with('success', 'Email has been sent!');
    }
}
