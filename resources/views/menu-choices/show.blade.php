@extends('layouts.wedding')

@section('title', 'Veronika & Alex | Menu Choices')

@section('content')
    <div class="container mt-5">
        <div class="alert alert-success">
            <p><strong>Thank you!</strong> Your menu choices have been saved, and a summary has been emailed to you. If
                you wish to change your selections, please <a href="{{ route('contact') }}">get in touch</a>.</p>
        </div>
        <div class="card">
            <div class="card-header">
                <h1>Menu Choices</h1>
            </div>
            <div class="card-body">
                <h2>Adults</h2>
                @foreach($rsvp->adult_choices as $adult)
                    <div class="card col-md-8 offset-2 mb-3">
                        <div class="card-header">
                            <strong>Name:</strong> {{ $adult->name }}
                        </div>
                        <div class="card-body">
                            <p><strong>Starter:</strong> {{ $adult->starter->name }}</p>
                            <p><strong>Main Course:</strong> {{ $adult->main_course->name }}</p>
                            <p><strong>Dessert:</strong> {{ $adult->dessert->name }}</p>
                            <p><strong>Special Requirements:</strong> {{ $adult->dietary }}</p>
                        </div>
                    </div>
                @endforeach

                <h2>Children</h2>
                @foreach($rsvp->child_choices as $child)
                    <div class="card col-md-8 offset-2 mb-3">
                        <div class="card-header">
                            <strong>Name:</strong> {{ $child->name }}
                        </div>
                        <div class="card-body">
                            <p>
                                <strong>Starter:</strong> {{ $child->starter ? $child->starter->name : 'No starter' }}
                            </p>
                            <p><strong>Main
                                    Course:</strong> {{ $child->main_course ? $child->main_course->name : 'No main course' }}
                            </p>
                            <p>
                                <strong>Dessert:</strong> {{ $child->dessert ? $child->dessert->name : 'No dessert' }}
                            </p>
                            <p><strong>Special Requirements:</strong> {{ $child->dietary }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop
