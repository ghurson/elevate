@extends('shell')

@section('title')
    Tickets for {{ $car->make }} {{ $car->model }}
@stop

@section('left-content')

    @foreach ($tickets as $ticket)
        <p>{{ $ticket->body }}</p>
    @endforeach

@stop


@section('right-content')


@stop