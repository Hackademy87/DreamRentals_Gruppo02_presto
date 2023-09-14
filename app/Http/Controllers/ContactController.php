<?php

namespace App\Http\Controllers;

use App\Mail\ConctactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact(){
        return view('contatti');
    }

    public function newContact(Request $request){
        $name= $request->input('name');
        $motive= $request->input('motive');
        $email= $request->input('email');
        $contactMail=new ConctactMail($name , $motive, $email);
        Mail::to('dreamrentals@info.com')->send($contactMail);
        return redirect()->route('home')->with('message', 'La mail é stata inviata con successo');
    }
     
}
