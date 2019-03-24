<?php

namespace App\Http\Controllers;

use App\Http\Requests\RsvpFormRequest;
use App\Mail\RSVPConfirmation;
use App\Rsvp;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Mail;

class RsvpController extends Controller
{
    public function index(): View
    {
        return view('rsvp.index');
    }

    public function store(RsvpFormRequest $request): RedirectResponse
    {
        $rsvp = Rsvp::create($request->validated());

        Mail::to($request->get('email'))->bcc('alex@asdfx.us')->send(new RSVPConfirmation($rsvp));

        return redirect()->route('rsvp.show')->with('attending', $request->get('attending'));
    }

    public function show()
    {
        if (session()->has('attending') === false) {
            return redirect()->route('rsvp.index');
        }

        return view('rsvp.show');
    }
}
