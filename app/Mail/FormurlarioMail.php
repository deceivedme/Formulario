<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FormurlarioMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     
     *
     * @return void
     */
    public $informacion;

    public function __construct( $informacion)
    {
        $this->informacion = $informacion;
    } 

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.formurlario-mail');
    }
}
