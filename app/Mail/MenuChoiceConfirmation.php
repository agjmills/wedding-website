<?php

namespace App\Mail;

use App\Rsvp;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MenuChoiceConfirmation extends Mailable
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
        return $this->view('emails.menu-choices.confirmation', ['rsvp' => $this->rsvp])
            ->text('emails.menu-choices.confirmation_plain', ['rsvp' => $this->rsvp])
            ->subject('Menu Choice Confirmation - Veronika and Alex\'s Wedding');
    }
}
