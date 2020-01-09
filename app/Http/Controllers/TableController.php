<?php

namespace App\Http\Controllers;

use App\AdultChoice;
use App\ChildChoice;

class TableController extends Controller
{
    public function index()
    {
        $tables = collect();
        $tableNames = ['Top', 1,2,3,4,5,6,7,8];
        foreach($tableNames as $table) {
            $adults = AdultChoice::where('table', $table)->get();
            $children = ChildChoice::where('table', $table)->get();
            $guests = $adults->concat($children);
            if ($guests->count() > 0) {
                $tables[] = $guests;
            }
        }

        return view('tables.index', ['tables' => $tables]);
    }

    public function export()
    {
        $tables = collect();
        foreach(range(1,8) as $table) {
            $adults = AdultChoice::where('table', $table)->get();
            $children = ChildChoice::where('table', $table)->get();
            $guests = $adults->concat($children);
            $tables[] = $guests;
        }

        foreach($tables as $table => $guests) {
            echo 'Table (' . $guests->count() . ' people),Starter,Main Course,Dessert,Dietary Requirements<br>';
            foreach ($guests as $guest) {
                echo $guest->name . ',' . $guest->starter->name . ',' . $guest->main_course->name . ',' . $guest->dessert->name . ',' . $guest->dietary . '<br>';
            }
        }

        die();
    }
}
