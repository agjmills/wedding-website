@extends('layouts.wedding')

@section('title', 'Veronika & Alex | Place')

@section('content')
    <div class="container-fluid">
        <div class="row mt-5 mb-5">
            <div class="col-md-12 text-center">
                <h1>Places to stay</h1>
                <p>The venue is the red marker on the map, the blue markers are hotels with availability.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 offset-3">
                <iframe src="https://www.google.com/maps/d/u/0/embed?mid=14FBOhjTYv6PhNN1405f29ROd2RJuDvqr" width="100%" height="480"></iframe>
            </div>
        </div>
    </div>
@stop
