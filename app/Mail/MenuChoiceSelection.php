<?php

namespace App\Mail;

use App\Rsvp;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MenuChoiceSelection extends Mailable
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
        $wedding_date = Carbon::create(2020, 02, 01);
        $days = Carbon::now()->diffInDays($wedding_date, false);
        return $this->view('emails.menu-choices.selection', ['rsvp' => $this->rsvp, 'days' => $days])
            ->text('emails.menu-choices.selection_plain', ['rsvp' => $this->rsvp, 'days' => $days])
            ->subject('Menu Choice Selection - Veronika and Alex\'s Wedding');
    }
}
