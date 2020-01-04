<?php

namespace App\Http\Controllers;

use App\AdultChoice;
use Barryvdh\DomPDF\Facade as PDF;

class PlaceCardController extends Controller
{
    public function index()
    {
        $choices = AdultChoice::where('wedding', 'cz')->get();
        $pdf = PDF::loadView('pdfs.place-cards.index', ['choices' => $choices]);
        return $pdf->download('invoice.pdf');
    }
}
