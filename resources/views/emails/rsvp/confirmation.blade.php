@extends('emails.layouts.wedding')

@section('content')
    <p>Thank you for your RSVP.</p>

    @if ($rsvp->attending ==='attending')
        <p>
            Thank you for confirming that you will be attending our wedding celebration on 1<sup>st</sup> February 2020 at 1pm.
        </p>
        <p>
            You will receive another email closer to the date of our wedding celebration with some more information, such as the schedule of the day, and places to stay near Ombersley.
        </p>
    @endif

    @if ($rsvp->attending === 'not attending')
        <p>
            Thank you for confirming that you will be attending the evening of our wedding celebration on 1<sup>st</sup> February 2020.
        </p>
        <p>
            You will receive another email closer to the date of our wedding celebration with some more information, such as the schedule of the day, and places to stay near Ombersley.
        </p>
    @endif

    @if ($rsvp->attending === 'evening')
        <p>We're really sorry you can't make it to our wedding celebration</p>
    @endif
@stop
