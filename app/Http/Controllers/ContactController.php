<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Contacts;

class ContactController extends Controller
{
    function create() {

        return view('Contact');
    }


    function store(ContactRequest $request) {

        $email = $request['email'];
        $name = $request['name'];
        $msg =$request['message'];

        $contact = new Contacts();
        $contact->contact_name = $name;
        $contact->contact_email = $email;
        $contact->contact_message = $msg;

        $contact->save();

        $mailable =  new ContactMessageCreated($request->name, $request->email, $request->message);
        Mail::to('ayoubboufedjitwi@gmail.com')->send($mailable);
        return redirect('Contact')->with('message','Nous vous repondrons dans les plus bréfs delais!');
}
}
