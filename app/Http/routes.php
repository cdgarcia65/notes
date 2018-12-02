<?php

use App\Note;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('notes', function () {
    $notes = Note::all();

    return view('notes', compact('notes'));
});

Route::get('notes/create', function () {
    return '[create notes]';
});

Route::get('notes/{note}', function ($note) {
    return "The note passed to parameter is $note";
});

Route::get('create/{title}/{slug?}', function ($note, $slug = null) {
    dd($note, $slug);
});


