@extends('shell')

@section('title')
    {{$car->make}}
@stop

@section('left-content')

    <p>tickets below:</p>

    @foreach($car->tickets as $ticket)

        <p>{{$ticket->body}}</p>

    @endforeach

@stop
