@extends('shell')

@section('title')
    {{ $car->make }}
@stop

@section('content')
    {{ $car }}
@stop

@section('update')

    <br>
    <br>
    <br>

    <form action="#" method="post">
        <input type="text" name="name">
        <input type="hidden" name="id" value="{{ $car->id }}">
        <input type="submit">
    </form>

@stop