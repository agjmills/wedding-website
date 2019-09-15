@extends('layouts.wedding')

@section('title', 'Veronika & Alex | Menu Choices')

@section('content')
    <div class="container mt-5">
        @if ($rsvp->attending !== 'attending')
        <div class="row">
            <div class="col-md-12">
                <h1>Menu Choices</h1>

                    <p>
                        Unfortunately, as you have responded to our invitation as 'not attending', you wont be able to
                        make any menu choices. But please feel free to explore the rest of the website to find out where
                        the venue is, as well as places to stay in the area.
                    </p>
        @else
            <form method="POST" action="">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h1>Menu Choices</h1>
                    </div>
                    <div class="card-body">

                    </div>
                    <div class="card-footer">
                        <input type="submit" class="btn btn-lg btn-primary pull-right" name="submit"
                               value="Submit">
                    </div>
                </div>
            </form>
        @endif
    </div>
@stop
