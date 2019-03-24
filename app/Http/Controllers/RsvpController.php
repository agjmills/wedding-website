<?php

namespace App\Http\Controllers;

use App\Http\Requests\RsvpFormRequest;
use App\Rsvp;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class RsvpController extends Controller
{
    public function index(): View
    {
        return view('rsvp.index');
    }

    public function store(RsvpFormRequest $request): RedirectResponse
    {
        Rsvp::create($request->validated());

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
