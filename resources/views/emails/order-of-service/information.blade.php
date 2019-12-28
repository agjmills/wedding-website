@extends('emails.layouts.wedding')

@section('content')
    <p>Dear {{ $rsvp->name }},</p>

    <p>
        We hope you have had a wonderful Christmas! Veronika &amp; I thought we would share some more information to you about
        our wedding, in February - as it's only a few weeks away!
    </p>
    <p>
        We've updated the website, which now contains; the order of service with approximate timings, a list of nearby
        accommodation that you may wish to book, as well as some guidance if you wish to gift us something.
    </p>
    <ul>
        <li>
            For the order of service, click here: {{ route('order-of-service') }}
        </li>
        <li>
            For information about the venue, click here: {{ route('venue') }}
        </li>
        <li>
            For information about the nearby accommodation, click here: {{ route('accommodations') }}
        </li>
        <li>
            For information about gifts, click here: {{ route('gifts') }}
        </li>
    </ul>
    <p>If you have any questions, or have any specific requirements which
        aren't met by the choices provided, please <a href="{{ route('contact') }}">get in touch</a> with one of us, and
        we will help as best we can.
    </p>

    <p>
        If you have any questions, please get in touch ({{ route('contact') }}) with one of us, and we will help as best we can.
    </p>

    <p>
        We hope you have a Happy New Year, and we look forward to seeing you at Crown &amp; Sandy's on 1st February 2020!
    </p>

    <p>Veronika &amp; Alex</p>
@stop
