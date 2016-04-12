<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ContactFormRequest;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }

	public function store(ContactFormRequest $request)
	{
		$email = $request->get('email');
		$name  = $request->get('name');
		\Mail::send('emails.contact',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'user_message' => $request->get('message')
        ), function($message) use($email,$name)
	    {
	        $message->from($email,$name);
	        $message->to('altru.app@gmail.com', 'Admin')->subject('Altru Enquiry');
	    });


	    return \Redirect::route('contact')->with('message', 'Thanks for contacting us!');

	}
}
