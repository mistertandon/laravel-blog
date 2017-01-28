<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller {

    /**
     * This function is used to render <Contact-us> form.
     * @return type
     */
    public function getContactUsForm() {

        return view('pages.contact_us');
    }

    /**
     * This function is used to render <Contact-us> form.
     * @return type
     */
    public function postContactUsForm(Request $request) {

        $this->validate($request, array(
            'title' => 'required|min:4|max:255',
            'email' => 'required|email',
            'body' => 'required|max:255'
        ));
        
        $contactFormData = array();
        $contactFormData['title'] = $request->input('title');
        $contactFormData['email'] = $request->input('email');
        $contactFormData['body'] = $request->input('body');
        
        Mail::send('emails.contact', $contactFormData, function ($message) use ($contactFormData){
            
            $message->from($contactFormData['email']);
            $message->to('enggparveshtandon@gmail.com');
            $message->subject($contactFormData['title']);
        });

        return view('pages.contact_us');
    }
}
