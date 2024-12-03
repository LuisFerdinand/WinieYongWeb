<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the form inputs
        $request->validate([
            'first-name' => 'required|string|max:255',
            'last-name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required',
        ]);

        // Prepare data for email
        $data = [
            'first_name' => $request->input('first-name'),
            'last_name' => $request->input('last-name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ];

        // Send the email
        Mail::to('sambaskaryaperkasarecruitment@gmail.com')
            ->send(new ContactFormMail($data));

        // Return a success response or redirect
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
