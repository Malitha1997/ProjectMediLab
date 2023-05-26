<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use Mail;

use App\Mail\DemoMail;



class MailController extends Controller

{




    public function index()

    {
        $email=$request->email;
        $f_name=$request->f_name; 

        $mailData = [

            'title' => 'Mail from Medilab',

            'body' => 'Dear Sir/Madam,'

        ];



        Mail::to($email)->send(new DemoMail($mailData,$email,$f_name));



        dd("Email is sent successfully.");

    }


}
