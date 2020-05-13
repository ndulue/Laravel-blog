<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function getContact(){
        return view('contact');
    }

    public function postContact(Request $request){
        $request->validate([
            'name' => 'required|string|max:250',
            'email_address' => 'required|email|max:250',
            'phone_number' => 'required|string|max:250',
            'message' => 'required|integer|max:250'
        ]);

        $contact = new Contact;
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->number = $request->input('number');
        $contact->message = $request->input('message');
        $contact->save();
        
        return back()->with([
            'success' => 'Your message has been received, you will get back to you as soon as possible'
        ]);

        return[
            'name.required' => 'Enter your first name',
            'email.required' => 'Enter your email address',
            'number.required' => 'Enter your phone number',
            'message.required' => 'Enter your message',
            'name.string' => 'Your name should contain only alphabet and whitespaces',
            'email.email' => 'Enter a valid email address',
            'number.integer' => 'Enter a valid phone number',
            'message.string' => 'Your message should contain only alphabet and whitespacese',
        ];
    }
}
