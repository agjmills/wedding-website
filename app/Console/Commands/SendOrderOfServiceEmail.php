<?php

namespace App\Console\Commands;

use App\Mail\MenuChoiceSelection;
use App\Mail\OrderOfService;
use App\Rsvp;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendOrderOfServiceEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'order-of-service:send-emails';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sends an email to every RSVP with the Order of Service';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        Rsvp::all()->each(function (Rsvp $rsvp) {
            Mail::to($rsvp->email)->bcc('alex@asdfx.us')->send(new OrderOfService($rsvp));
            $this->info('Sending email to:' . $rsvp->email);
        });
    }
}
