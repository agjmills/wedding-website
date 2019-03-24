<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('place', function () {
    return view('place');
})->name('place');

Route::get('accommodations', function () {
    return view('accomodations');
})->name('accommodations');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('rsvp', 'RsvpController@index')->name('rsvp.index');
Route::post('rsvp', 'RsvpController@store')->name('rsvp.store');
Route::get('rsvp/thank-you', 'RsvpController@show')->name('rsvp.show');
