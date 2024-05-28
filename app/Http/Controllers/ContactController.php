<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function home(){
        return view('welcome');
    }

    public function contactView(){
        return view('contact-us');
    }

    public function contactSave(Request $request){
        
        Mail::to($request->email)->send(new ContactMail($request->email, $request->nome, $request->cognome, $request->messaggio));
        return redirect()->back()->with('success','Ti abbiamo inviato una mail!');
    }
}
