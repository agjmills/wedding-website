@extends('layouts.wedding')

@section('content')
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
                <p class="lead">13:00</p>
                <p>
                    <a href="{{ route('place') }}">
                        Crown and Sandys<br>
                        Main Road<br>
                        Ombersley<br>
                        WR9 0EW
                    </a>
                </p>
            </div>
        </div>
    </div>
@stop
