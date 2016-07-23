@extends("shell")


@section('title')
    Order Creation Page
@stop

@section('left-content')

    <p>Place your order here</p>

    @foreach($orders as $order)

        <p>
            <a href="/order/{{ $order->id }}">
                {{ $order->title }}
            </a>
        </p>

    @endforeach


@stop

@section('right-content')

    <form action="/order" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <p>hide me:</p>
        <input type="text" value="{{ Auth::ID() }}" name="user_id">

        <input type="text" name="title" placeholder="Title">
        <input type="text" name="pickup" placeholder="Pickup">
        <input type="submit">

    </form>
    <a href="/order/{{$order-id}}/delete" class="button">Delete Order</a>
@stop