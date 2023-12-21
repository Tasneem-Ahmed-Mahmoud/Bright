<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    
    public function index()
    {
        //
    }

   
    public function store(ContactRequest $request)
    {
        $message=Contact::create([
          'name'=>$request->name,
          'message'=>$request->message,
          'subject'=>$request->subject,
          'email'=>$request->email
        ]);

        if($message){
            
        }
    }

   
}
