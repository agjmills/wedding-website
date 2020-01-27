<?php

namespace App\Http\Controllers;

use App\AdultChoice;
use Barryvdh\DomPDF\Facade as PDF;

class PlaceCardController extends Controller
{
    public function index()
    {
        $choices = AdultChoice::all();
        $pdf = PDF::loadView('pdfs.place-cards.index', ['choices' => $choices]);
        return $pdf->download('place-cards.pdf');
    }
}
