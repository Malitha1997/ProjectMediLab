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

    public function __construct($mailData,$email)

    {

        $this->mailData = $mailData;
        $this->email = $email;

    }



    /**

     * Build the message.

     *

     * @return $this

     */

    public function build()

    {

        return $this->subject('Mail from MediLab')

                    ->view('admin.emails.appointmentMail');

    }

}
