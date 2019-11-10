@extends('emails.layouts.wedding')

@section('content')
    <p>Dear {{ $rsvp->name }},</p>

    <p>
        It's only {{ $days }} days until our wedding celebration, and we hope you're as excited as we are!
    </p>
    <p>
        We've sent you this email, as we'd like to know what you'd like to have to eat on the big day. So please click
        the link below to be taken to your choices.
    </p>
    <p>If you have any questions, or have any specific requirements which
        aren't met by the choices provided, please <a href="{{ route('contact') }}">get in touch</a> with one of us, and
        we will help as best we can.
    </p>

    <p>
        <a href="{{ route('menu-choices.create', $rsvp) }}">Click here to make your food choices</a>
    </p>

    <p>We look forward to seeing you all there!</p>

    <p>Veronika &amp; Alex</p>
@stop
