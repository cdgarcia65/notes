<?php

use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Note;

class NotesTest extends TestCase
{
    use DatabaseTransactions;

    public function test_notes_list()
    {
        // Having
        Note::create(['note' => 'My first note']);
        Note::create(['note' => 'My second note']);

        // When
        $this->visit('notes')
            // Then
            ->see('My first note')
            ->see('My second note');
    }

    public function test_create_note()
    {
        $this->visit('notes')
            ->click('Create a note')
            ->seePageIs('notes/create')
            ->see('Create a note')
            ->type('A new note', 'note')
            ->press('Create note')
            ->seePageIs('notes')
            ->seeInDatabase('notes', ['note' => 'A new note']);
    }

    public function test_notes_summary_and_details()
    {
        $text  = 'Begin of the note... Incidunt qui voluptate provident itaque modi. Sunt eius debitis fugit beatae et. ';
        $text .= 'End of the note.';

        // Having
        $note = Note::create(['note' => $text]);

        // When
        $this->visit('notes')
            ->see('Begin of the note...')
            ->dontSee('End of the note.')
            ->seeLink('View note', "notes/$note->id")
            ->click('View note')
            ->seePageIs("notes/$note->id")
            ->see($note->note)
            ->click('Back')
            ->seePageIs('notes');
    }
}
