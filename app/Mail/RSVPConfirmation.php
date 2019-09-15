<?php

namespace App\Mail;

use App\Rsvp;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RSVPConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var Rsvp
     */
    public $rsvp;

    public function __construct(Rsvp $rsvp)
    {
        $this->rsvp = $rsvp;
    }

    public function build()
    {
        return $this->view('emails.rsvp.confirmation')->text('emails.rsvp.confirmation_plain')->subject('RSVP Confirmation - Veronika and Alex\'s Wedding');
    }
}
