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

Route::get('venue', function () {
    return view('venue');
})->name('venue');

Route::get('accommodations', function () {
    return view('accommodations');
})->name('accommodations');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('rsvp', 'RsvpController@index')->name('rsvp.index');
Route::post('rsvp', 'RsvpController@store')->name('rsvp.store');
Route::get('rsvp/thank-you', 'RsvpController@show')->name('rsvp.show');
Route::get('menu-choices/{rsvp}', 'MenuChoiceController@create')->name('menu-choices.create');
Route::post('menu-choices/{rsvp}', 'MenuChoiceController@update')->name('menu-choices.update');
Route::get('menu-choices/{rsvp}/complete', 'MenuChoiceController@show')->name('menu-choices.show');
