<?php
 
namespace App\Http\Controllers;
 
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;
 
class ContactController extends Controller
{
    public function sendEmail()
    {
        $details = [
            'title' => 'Mail de mon beau site',
            'body' => 'Votre identité a été confirmé'
        ];
         Mail::to("djanki.amazone@gmail.com")->send(new Contact($details));

        return view('photo');

    }
    
}