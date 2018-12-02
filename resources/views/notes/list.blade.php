@extends('layout')

@section('content')
    <br><br>
    <h1>Notes</h1>
    <a class="btn btn-primary" href="{{ url('notes/create') }}">Create a note</a> <br><br>
    <ul>
        @foreach ($notes as $note)
            <li>
                @if ($note->category)
                    <span class="label label-info">{{ $note->category->name }}</span>
                @else
                    <span class="label label-warning">Other</span>
                @endif

                {{ substr($note->note, 0, 100) }} <a href="{{ url('notes/' . $note->id) }}">View note</a>
            </li>
        @endforeach
    </ul>
    {!! $notes->render() !!}
@endsection
