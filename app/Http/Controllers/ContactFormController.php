<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Mail;


class ContactFormController extends Controller
{
    public function send(){
        $data = request()->validate([
            'fname'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'subject'=>'required',
            'message'=>'required',
        ]);
//    dd($data);
        // send Email

          Mail::to('mashfiqurrr@gmail.com')->send(new ContactFormMail($data));
        return redirect('/contact')->with('success', 'Message Sent!');


    }
}