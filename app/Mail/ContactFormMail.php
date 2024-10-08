<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    // Constructor to accept the data passed from the controller
    public function __construct($data)
    {
        $this->data = $data;
    }

    // Build the message
    public function build()
    {
        return $this->from($this->data['email'], $this->data['name']) // Set sender's name and email
            ->subject('New Contact Message')
            ->view('emails.contact')
            ->with('data', $this->data); // Pass the data to the view
    }
}
