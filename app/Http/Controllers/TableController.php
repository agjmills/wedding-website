<?php

namespace App\Http\Controllers;

use App\AdultChoice;
use App\ChildChoice;
use Illuminate\Http\Response;

class TableController extends Controller
{
    public function index()
    {
        $tables = collect();
        $tableNames = ['Top', 1, 2, 3, 4, 5, 6, 7, 8];
        foreach ($tableNames as $table) {
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
        $headers = [
            'Content-type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename=tables.csv',
            'Pragma' => 'no-cache',
            'Cache-Control' => 'must-revalidate, post-check=0, pre-check=0',
            'Expires' => 0,
        ];

        $tables = collect();
        $tableNames = ['Top', 1, 2, 3, 4, 5, 6, 7];
        foreach ($tableNames as $table) {
            $adults = AdultChoice::where('table', $table)->get();
            $children = ChildChoice::where('table', $table)->get();
            $guests = $adults->concat($children);
            $tables[$table] = $guests;
        }

        $callback = function () use ($tables) {
            $file = fopen('php://output', 'w');
            foreach ($tables as $table => $guests) {
                fputcsv($file, ['Table ' . $table . '(' . $guests->count() . ' people)', 'Starter', 'Main Course', 'Dessert', 'Dietary Requirements']);

                foreach ($guests as $guest) {
                    fputcsv($file, [$guest->name, $guest->starter->name, $guest->main_course->name, $guest->dessert->name, $guest->dietary]);
                }
            }
            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }


    public function exportWithoutFood()
    {
        $headers = [
            'Content-type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename=tables-without-food.csv',
            'Pragma' => 'no-cache',
            'Cache-Control' => 'must-revalidate, post-check=0, pre-check=0',
            'Expires' => 0,
        ];

        $tables = collect();
        $tableNames = ['Top', 1, 2, 3, 4, 5, 6, 7];
        foreach ($tableNames as $table) {
            $adults = AdultChoice::where('table', $table)->get();
            $children = ChildChoice::where('table', $table)->get();
            $guests = $adults->concat($children);
            $tables[$table] = $guests;
        }

        $callback = function () use ($tables) {
            $file = fopen('php://output', 'w');
            foreach ($tables as $table => $guests) {
                fputcsv($file, ['Table ' . $table . ' (' . $guests->count() . ' people)']);
                foreach ($guests as $guest) {
                    fputcsv($file, [$guest->name]);
                }
            }
            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}
