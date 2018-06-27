<?php namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;

class AboutController extends Controller {

    public function create()
    {
        return view('contact');
    }

    public function store(ContactFormRequest $request)
    {

        \Mail::send('emails.contact',
            array(
                'name' => $request->get('name'),
                'lastname' => $request->get('lastname'),
                'email' => $request->get('email'),
                'phone' => $request->get('phone'),
                'user_message' => $request->get('message')
            ), function($message)
        {
            $message->from('support@southwestwaterservice.com');
            $message->to('support@southwestwaterservice.com', 'Admin')->subject('Customer Contact');
        });

        return redirect()->back()->with('message', 'Thank you for contacting us. We will be in touch as soon as possible.');

    }
}
