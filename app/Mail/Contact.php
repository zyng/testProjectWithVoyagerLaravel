<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subject, $phone, $message, $name, $email)
    {
        $this->subject = $subject;
        $this->phone = $phone;
        $this->message = $message;
        $this->name = $name;
        $this->email = $email;
        // $this->recaptcha = $recaptcha;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('contact')
                ->from($this->email)
                ->subject($this->subject)
                ->with([
                    'subject' => $this->subject,
                    'message' => $this->message,
                    'phone' => $this->phone,
                    'name' => $this->name,
                    'email' => $this->email
                ]);

    }
}
