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
            <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#">Place</a>
            <a class="nav-item nav-link" href="#">Accommodations</a>
            <a class="nav-item nav-link" href="#">RSVP</a>
        </div>
    </div>
</nav>
<div class="container welcome-container">
    <div class="row invitation-row">
        <div class="col-md-12 text-center">
            <p>You are invited to the wedding celebration of</p>
            <h1>Veronika &amp; Alex</h1>
            <img src="/img/bride-and-groom.png" class="img-responsive">
        </div>
    </div>
    <div class="row detail-row">
        <div class="col-md-12 text-center">
            <h2>1<sup>st</sup> February 2020</h2>
            <p>
                Crown and Sandys<br>
                Main Road<br>
                Ombersley<br>
                WR9 0EW
            </p>
        </div>
    </div>
</div>
</body>
</html>
