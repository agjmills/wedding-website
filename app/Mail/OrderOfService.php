<?php

namespace App\Mail;

use App\Rsvp;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderOfService extends Mailable
{
    use Queueable, SerializesModels;

    public $rsvp;

    public function __construct(Rsvp $rsvp)
    {
        $this->rsvp = $rsvp;
    }

    public function build()
    {
        $wedding_date = Carbon::create(2020, 02, 01);
        $days = Carbon::now()->diffInDays($wedding_date, false);
        return $this->view('emails.order-of-service.information', ['rsvp' => $this->rsvp, 'days' => $days])
            ->text('emails.order-of-service.information_plain', ['rsvp' => $this->rsvp, 'days' => $days])
            ->subject('Order of Service - Veronika and Alex\'s Wedding');
    }
}
