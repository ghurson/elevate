@extends('shell')

@section('title')
    Elevate: It's Time.
@stop

@section('user-info')

    <p>user info here</p>
    <p>{{ Auth::ID() }}</p>

    @if ( count($errors->all()) )
        <div class="alert alert-danger">
            <p>Some validation errors occurred:</p>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif



@stop

@section('left-content')
    <p>Elevate yoself, playa.</p>
    <p><a href="/cars">View All Cars</a></p>
    <p><a href="/order">Order Page</a></p>
@stop

@section('right-content')


    <form action="/login" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">


        <div class="row">
            <div class="medium-6 columns">
                <label for="username">
                    Username
                    <input type="text" name="email">
                </label>

            </div>
            <div class="medium-6 columns">
                <label for="password">
                    Password
                    <input type="password" name="password">
                </label>

            </div>
        </div>
        <input type="submit" value="login">

    </form>

@stop
