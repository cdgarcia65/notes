@extends('layout')

@section('content')
    <br><br>
    <h1>Notes details</h1>
    <p>{{ $note->note }}</p>
    <a href="{{ url('notes') }}">Back</a>
@endsection