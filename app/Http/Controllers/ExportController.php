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
        $completed = AdultChoice::whereNotNull('name')->count() + ChildChoice::whereNotNull('name')->count();

        $incompletes = Rsvp::whereHas('adult_choices', function (Builder $query) {
            $query->whereNull('name');
        })->get();

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
