<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ActivateAccaunt extends Mailable
{
    use Queueable, SerializesModels;

    protected $_url;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($token,$email)
    {
        $this->_url=route('activation',['email'=>$email,'token'=>$token]);

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.activate',['url'=>$this->_url]);
    }
}
