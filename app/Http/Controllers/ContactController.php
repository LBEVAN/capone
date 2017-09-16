<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Post;

use Mail;
use Session;

class ContactController extends Controller {

    public function postContact(Request $request) {
        $contactData = array(
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'contactMessage' => $request->message
        );

        try {
            Mail::send('emails.contact', $contactData, function ($message) use ($contactData) {
                $message->subject($contactData['subject']);
                $message->to('caponeclothing@yahoo.com');
                $message->from('caponeclothing@yahoo.com');
            });
        } catch(\Exception $ex) {
            Log::error('Code: ' . $ex->getCode());
            Log::error('Message: ' . $ex->getMessage());

            return redirect()->back()->withErrors('An error occurred sending the email. Please try again later.');
        }

        return redirect()->back()->with('success', 'Your query has been received. We will try and reply as soon as possible.');
    }
}