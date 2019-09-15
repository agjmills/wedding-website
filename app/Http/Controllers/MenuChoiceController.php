<?php

namespace App\Http\Controllers;

use App\Rsvp;
use Illuminate\View\View;

class MenuChoiceController extends Controller
{
    public function create(Rsvp $rsvp) {
        return view('menu-choices.create', ['rsvp' => $rsvp]);
    }
}
