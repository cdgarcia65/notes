<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Note;

class NotesController extends Controller
{
    public function index()
    {
        $notes = Note::paginate();
        return view('notes.list', compact('notes'));
    }

    public function create()
    {
        return view('notes.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
           'note' => 'required|max:255'
        ]);

        Note::create($request->all());

        return redirect()->to('notes');
    }

    public function show($note)
    {
        $note = Note::findOrFail($note);

        return view('notes.details', compact('note'));
    }
}
