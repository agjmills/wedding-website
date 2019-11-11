@extends('emails.layouts.wedding')

@section('content')
    <h1>Thank you</h1>
    <p>Your menu choices have been submitted, and a summary of them is below. If you with to make any changes, please <a href="{{ route('contact') }}">get in touch</a></p>

    <h3>Adults</h3>
    @foreach($rsvp->adult_choices as $adult)
        <p>
            <strong>Name</strong>: {{ $adult->name }}
        </p>
        <p>
            <strong>Starter</strong>: {{ $adult->starter->name }}
        </p>
        <p>
            <strong>Main Course</strong>: {{ $adult->main_course->name }}
        </p>
        <p>
            <strong>Dessert</strong>: {{ $adult->dessert->name }}
        </p>
        <p>
            <strong>Special Requirements</strong>: {{ $adult->dietary }}
        </p>
        <hr>
    @endforeach

    @if ($rsvp->child_choices()->count() > 0)
        <h3>Children</h3>
        @foreach($rsvp->child_choices as $child)
            <p>
                <strong>Name</strong>: {{ $child->name }}
            </p>
            <p>
                <strong>Starter</strong>: {{ $child->starter ? $child->starter->name : 'No starter' }}
            </p>
            <p>
                <strong>Main Course</strong>: {{ $child->main_course ? $child->main_course->name : 'No main course' }}
            </p>
            <p>
                <strong>Dessert</strong>: {{ $child->dessert ? $child->dessert->name : 'No dessert' }}
            </p>
            <p>
                <strong>Special Requirements</strong>: {{ $child->dietary }}
            </p>
            <hr>
        @endforeach
    @endif
@stop
