<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Car Rental Application</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.3/foundation.min.css"/>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>

<header>


    <div class="row">
        <h1>@yield('title')</h1>
    </div>

</header>

<div class="content">



    <div class="row">
        <div class="medium-4 column">
            @yield('left-content')
        </div>
        <div class="medium-4 column">
            @yield('right-content')
        </div>
        <div class="medium-4 column">
            @yield('user-info')
        </div>
    </div>
</div>

<footer>
    <div class="row">
        <div class="medium-6 columns">
            <p><a href="/">&laquo; Return Home</a></p>
        </div>
        <div class="medium-6 column">
            <p><a href="/home">Laravel Home</a></p>
        </div>
    </div>
</footer>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/what-input/2.1.1/what-input.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.3/foundation.min.js"></script>
<script>
    $(document).foundation();
</script>

</body>
</html>