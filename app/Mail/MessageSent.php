<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MessageSent extends Mailable
{
    use Queueable, SerializesModels;

    public $firstname;
    public $lastname;
    public $title;
    public $email;
    public $comment;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($firstname,$lastname,$title,$email, $comment)
    {
        //
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->title = $title;
        $this->email = $email;
        $this->comment = $comment;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {


        $email = $this->view('emails.notify');
                // ->from($this->lastname);
        return $email;
    }
}