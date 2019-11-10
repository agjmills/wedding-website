<?php

namespace App\Console\Commands;

use App\AdultChoice;
use App\ChildChoice;
use App\Rsvp;
use Illuminate\Console\Command;

class MakeChoiceSlots extends Command
{
    protected $signature = 'menu-choices:make-slots';

    protected $description = 'Make slots for all of the people that person is responsible for';

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
            if ($rsvp->adult_choices()->count() < $rsvp->adults) {
                for ($count = 0; $count < $rsvp->adults; $count++) {
                    AdultChoice::create(['rsvp_uuid' => $rsvp->uuid]);
                }
            }

            if ($rsvp->child_choices()->count() < $rsvp->children) {
                for ($count = 0; $count < $rsvp->children; $count++) {
                    ChildChoice::create(['rsvp_uuid' => $rsvp->uuid]);
                }
            }

        });
    }
}
