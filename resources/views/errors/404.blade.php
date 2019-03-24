@extends('layouts.wedding')

@section('title', 'Veronika & Alex | Page Not Found')

@section('content')
    <div class="container 404-container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <h1>Oops!</h1>
                <p class="lead">We can't seem to find the page you're looking for.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img src="/img/cake.png">
            </div>
            <div class="col-md-8">
                <p>
                    Don't worry, have some cake and try using one of the links below instead:
                    @include('layouts.partials.navigation-links')
                </p>
            </div>
        </div>
    </div>

@stop
