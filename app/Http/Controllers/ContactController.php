<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\ConctactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact(){
        return view('contatti');
    }

    public function newContact(Request $request){
        $name= $request->input('name');
        $motive= $request->input('motive');
        $user = Auth::user();
        $contactMail=new ConctactMail($name , $motive, $user);
        Mail::to('dreamrentals@info.com')->send($contactMail);
        return redirect()->route('home')->with('message', 'La mail é stata inviata con successo');
    }

}
