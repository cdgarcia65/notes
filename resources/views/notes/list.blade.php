@extends('layout')

@section('content')
    <br><br>
    <h1>Notes</h1>
    <a class="btn btn-primary" href="{{ url('notes/create') }}">Create a note</a> <br><br>
    <ul>
        @foreach ($notes as $note)
            <li>
                <span class="label label-info">{{ $note->category->name }}</span>
                {{ $note->note }}
            </li>
        @endforeach
    </ul>
    {!! $notes->render() !!}
@endsection
