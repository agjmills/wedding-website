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
        $total = AdultChoice::count() + ChildChoice::count();
        $completed = AdultChoice::whereNotNull('name')->count() + ChildChoice::whereNotNull('name')->count();
        return view(
            'export.index',
            [
                'adults' => AdultChoice::whereNotNull('name')->get(),
                'children' => ChildChoice::whereNotNull('name')->get(),
                'incompleteAdults' => AdultChoice::whereNull('name')->get(),
                'incompleteChildren' => ChildChoice::whereNull('name')->get(),
                'total' => $total,
                'completed' => $completed,
            ]
        );
    }
}
