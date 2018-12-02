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
}
