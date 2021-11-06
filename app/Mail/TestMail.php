<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;
    public $details;
    public $code;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details,$code)
    {
        $this->details= $details;
        $this->code= $code;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Xác nhận tài khoản Email')->view('viewmail.viewconfirmemail');
    }
}
