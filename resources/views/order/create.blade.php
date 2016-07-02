@extends("shell"))


@section('title')
    Place your oder here, {{ $user->name }}
@stop

@section('content')

    <form action="">

        <input type="text" name="customer_name" placeholder="Your Name">
        <input type="submit">
        
    </form>
@stop