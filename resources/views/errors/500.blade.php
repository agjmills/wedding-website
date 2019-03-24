@extends('layouts.wedding')

@section('title', 'Veronika & Alex | Internal Server Error')

@section('content')
    <div class="container 404-container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <h1>Oops!</h1>
                <p class="lead">Something went wrong when trying to get that page for you.</p>
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
