<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Veronika & Alex')</title>
    <link href="https://fonts.googleapis.com/css?family=Nanum+Pen+Script" rel="stylesheet" type="text/css">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="{{ route('place') }}">Place</a>
            <a class="nav-item nav-link" href="{{ route('accommodations') }}">Accommodations</a>
            <a class="nav-item nav-link" href="{{ route('rsvp.index') }}">RSVP</a>
        </div>
    </div>
</nav>
@yield('content')
</body>
</html>
