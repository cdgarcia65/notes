<?php

use Illuminate\Http\Request;

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

Route::get('notes', 'NotesController@index');

Route::post('notes', 'NotesController@store');
Route::get('notes/create', 'NotesController@create');

Route::get('notes/{note}', 'NotesController@show');
