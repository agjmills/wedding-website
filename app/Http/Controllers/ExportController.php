<?php

namespace App\Http\Controllers;

use App\AdultChoice;
use App\ChildChoice;
use App\Rsvp;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\View\View;

class ExportController extends Controller
{
    public function index(): View
    {
        $total = AdultChoice::count() + ChildChoice::count();
        $completed = AdultChoice::where('wedding', 'cz')->whereNotNull('name')->get();
        $completed->each(function(AdultChoice $choice) {
            echo '<p>' . $choice->name . ',' . $choice->starter->name . ',' . $choice->main_course->name . '</p>';
        });

        die();
        return view(
            'export.index',
            [
                'adults' => AdultChoice::whereNotNull('name')->get(),
                'children' => ChildChoice::whereNotNull('name')->get(),
                'incompletes' => $incompletes,
                'total' => $total,
                'completed' => $completed,
            ]
        );
    }
}
