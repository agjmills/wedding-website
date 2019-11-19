<?php

namespace App\Http\Controllers;

use App\AdultChoice;
use App\ChildChoice;
use App\Rsvp;
use Illuminate\View\View;

class ExportController extends Controller
{
    public function index(): View
    {
        return view(
            'export.index',
            [
                'adults' => AdultChoice::whereHas('starter')
                    ->whereHas('main_course')
                    ->whereHas('dessert')
                    ->get(),
                'children' => ChildChoice::all(),
            ]
        );
    }
}
