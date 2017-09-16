<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

use Mail;
use Session;

class ContactController extends Controller
{
    public function postContact(Request $request) {
        $contactData = array(
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'contactMessage' => $request->message
        );

        Mail::send('emails.contact', $contactData, function($message) use ($contactData){
            $message->subject($contactData['subject']);
            $message->to('caponeclothing@yahoo.com');
            $message->from($contactData['email']);
        });

        Session::flash('success', 'Your query has been received, we will try and reply as soon as possible.');

        return redirect()->back();
    }
}