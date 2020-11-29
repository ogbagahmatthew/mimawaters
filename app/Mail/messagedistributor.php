<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class messagedistributor extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $business_name;
    public $business_address;
    public $email;
    public $phone_no;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $business_name, $business_address, $email, $phone_no)
    {
        //
        $this->name = $name;
        $this->business_name= $business_name;
        $this->business_address= $business_address;
        $this->email = $email;
        $this->phone_no = $phone_no;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.notifydistributors');
    }
}
