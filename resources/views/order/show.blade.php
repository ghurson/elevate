@extends("shell")


@section('title')
    View Order {{ $order->title }}
@stop

@section('left-content')

    <p>Order by {{ $user->name }}</p>

@stop

@section('right-content')

    <p>Update your order</p>

    <form action="/order/{{$order->id}}" method="POST">
        {{ method_field('patch') }}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <input type="text" name="title" value="{{ $order->title }}">
        <input type="text" name="pickup" value="{{ $order->pickup }}">

        <input type="submit">

    </form>
@stop