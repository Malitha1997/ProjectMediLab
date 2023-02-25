<?php



namespace App\Mail;



use Illuminate\Bus\Queueable;

use Illuminate\Contracts\Queue\ShouldQueue;

use Illuminate\Mail\Mailable;

use Illuminate\Queue\SerializesModels;



class DemoMail extends Mailable

{

    use Queueable, SerializesModels;



    public $mailData;
    public $email;
    // public $doctor_fname;
    // public $doctor_lname;

    public function __construct($mailData,$email)

    {

        $this->mailData = $mailData;
        $this->email = $email;
        // $this->doctor_fname = $doctor_fname;
        // $this->doctor_lname = $doctor_lname;

    }



    /**

     * Build the message.

     *

     * @return $this

     */

    public function build()

    {

        return $this->subject('Mail from MediLab')

                    ->view('admin.emails.contact');

    }

}
