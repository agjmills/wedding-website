<?php

namespace App\Console\Commands;

use App\Mail\MenuChoiceConfirmation;
use App\Mail\MenuChoiceSelection;
use App\Rsvp;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendMenuChoiceEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'menu-choices:send-emails';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sends an email to each day-time guest, requesting their menu choices';

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
        $rsvps = Rsvp::where('attending', 'attending')->get();
        $rsvps->each(function (Rsvp $rsvp) {
            Mail::to($rsvp->email)->bcc('alex@asdfx.us')->send(new MenuChoiceSelection($rsvp));
            $this->info('Sending email to:' . $rsvp->email);
            sleep(1);
        });
    }
}
