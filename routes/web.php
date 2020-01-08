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

Route::get('order-of-service', function () {
    return view('order-of-service');
})->name('order-of-service');

Route::get('gifts', function() {
   return view('gifts');
})->name('gifts');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('rsvp', 'RsvpController@index')->name('rsvp.index');
Route::post('rsvp', 'RsvpController@store')->name('rsvp.store');
Route::get('rsvp/thank-you', 'RsvpController@show')->name('rsvp.show');
Route::get('menu-choices/{rsvp}', 'MenuChoiceController@create')->name('menu-choices.create');
Route::post('menu-choices/{rsvp}', 'MenuChoiceController@update')->name('menu-choices.update');
Route::get('menu-choices/{rsvp}/complete', 'MenuChoiceController@show')->name('menu-choices.show');
Route::get('export', 'ExportController@index')->name('export');
Route::get('place-cards', 'PlaceCardController@index')->name('placecards');
Route::get('tables', 'TableController@index')->name('tables');
