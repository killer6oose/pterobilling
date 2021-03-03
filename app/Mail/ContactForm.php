<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $name;
    public $messageSubject; // Please don't use $subject because IT BREAKS THE LARAVEL FRAMEWORK!!
    public $messageBody; // Please don't use $message because IT BREAKS THE LARAVEL FRAMEWORK!!

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email, $name, $subject, $message)
    {
        $this->email = $email;
        $this->name = $name;
        $this->messageSubject = $subject;
        $this->messageBody = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('You received a message from the contact form on the PteroBilling store.')->view('mail.contact');
    }
}
