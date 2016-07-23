@extends('shell')

@section('title')
    View All Cars
@stop

@section('left-content')

    @foreach($cars as $car)
        <p>
            <a href="/cars/{{$car->id}}">
                {{$car->model}} : ({{count($car->tickets)}} Tickets)
            </a>
        </p>
    @endforeach


@stop

@section('right-content')


@stop
