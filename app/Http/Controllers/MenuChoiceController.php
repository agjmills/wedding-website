<?php

namespace App\Http\Controllers;

use App\AdultChoice;
use App\ChildChoice;
use App\Dessert;
use App\Http\Requests\MenuChoiceFormRequest;
use App\Mail\MenuChoiceConfirmation;
use App\Mail\RSVPConfirmation;
use App\MainCourse;
use App\Rsvp;
use App\Starter;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class MenuChoiceController extends Controller
{
    public function create(Rsvp $rsvp) {
        $adult_starters = Starter::where('children', false)->get();
        $adult_main_courses = MainCourse::where('children', false)->get();
        $adult_desserts = Dessert::where('children', false)->get();
        $child_starters = Starter::where('children', true)->get();
        $child_main_courses = MainCourse::where('children', true)->get();
        $child_desserts = Dessert::where('children', true)->get();

        return view(
            'menu-choices.create', [
                'rsvp' => $rsvp,
                'adult_starters' => $adult_starters,
                'adult_main_courses' => $adult_main_courses,
                'adult_desserts' => $adult_desserts,
                'child_starters' => $child_starters,
                'child_main_courses' => $child_main_courses,
                'child_desserts' => $child_desserts,
            ]
        );
    }

    public function update(MenuChoiceFormRequest $request, Rsvp $rsvp)
    {
        $input = $request->all();

        foreach ($input['adults'] as $id => $adult) {
            $choice = AdultChoice::find($id);
            $choice->update($adult);
        }

        foreach ($input['children'] as $id => $child) {
            $choice = ChildChoice::find($id);
            $choice->update($child);
        }

        Mail::to($rsvp->email)->bcc('alex@asdfx.us')->send(new MenuChoiceConfirmation($rsvp->fresh()));
        return redirect()->route('menu-choices.show', $rsvp);
    }

    public function show(Rsvp $rsvp): View {
        return view('menu-choices.show', ['rsvp' => $rsvp]);
    }
}
