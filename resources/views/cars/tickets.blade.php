@extends('shell')

@section('title')
    Tickets for {{ $car->make }} {{ $car->model }}
@stop

@section('content')

    @foreach ($tickets as $ticket)
        <p>{{ $ticket->body }}</p>
    @endforeach

@stop