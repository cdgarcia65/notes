<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Note;

class NotesTest extends TestCase
{
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
}
