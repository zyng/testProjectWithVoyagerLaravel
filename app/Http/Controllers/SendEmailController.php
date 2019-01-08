<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Contact;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    public function send(Request $request) {

        $messages = [
            'email.required' => 'Adres e-mail jest wymagany!',
            'name.required' => 'Nazwa jest wymagana!',
            'subject.required' => 'Temat jest wymagany!',
            'phone.required' => 'Telefon jest wymagany!',
            'message.required' => 'Wiadomość jest wymagana!',
            'email.email' => 'To nie jest poprawny adres e-mail!'
        ];

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'phone' => 'required',
            'message' => 'required'
        ], $messages);

        $name = $request->name;
        $email = $request->email;
        $subject = $request->subject;
        $phone = $request->phone;
        $message = $request->message;


        // Mail::to(config('app.mail_to_address'))->send(new Contact($subject, $phone, $message, $name, $email));
        Mail::to('michal.kisielewski@inprox.pl')->send(new Contact($subject, $phone, $message, $name, $email));
      
        // return redirect()->back()->with('contact_success', 'Wiadomość została wysłana pomyślnie!');
        return redirect()->to(app('url')->previous(). '#formSend')->with('success', 'Thanks for contacting us!');
        
    }
}
