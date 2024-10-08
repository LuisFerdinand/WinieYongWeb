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
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Prepare data for email
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ];

        // Send the email
        Mail::to('ferdinandluis88@gmail.com')
            ->send(new ContactFormMail($data)); // Pass the data to the mailable

        // Return a success response or redirect
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
