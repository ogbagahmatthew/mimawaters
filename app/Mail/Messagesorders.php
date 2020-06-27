<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Messagesorders extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $address;
    public $email;
    public $phone_no;
    public $quantity;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $address, $email, $phone_no, $quantity)
    {
        //
        $this->name=$name;
        $this->address =$address;
        $this->email = $email;
        $this->phone_no = $phone_no;
        $this->quantity = $quantity;


    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = $this->view('emails.notifyorders');
        // ->from($this->lastname);
return $email;
    }
}
