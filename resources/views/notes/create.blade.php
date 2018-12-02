@extends('layout')

@section('content')
    <br><br>
    <h1>Create a note</h1>

    <form action="{{ url('notes') }}" method="POST" class="form">
        {{ csrf_field() }}
        <textarea name="note" id="note" cols="30" rows="10" class="form-control"></textarea>
        <br><br>
        <button type="submit" class="btn btn-primary">Create note</button>
    </form>
@endsection