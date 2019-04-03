@extends('layouts.wedding')

@section('title', 'Veronika & Alex | Thank you')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1>Thank you</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                @if (session()->get('attending') === 'attending')
                    <p>
                        Thank you for confirming that you will be attending our wedding celebration on 1<sup>st</sup> February 2020 at 1pm
                    </p>
                    <p>
                        You should receive an email in the next few minutes confirming your RSVP, as well as another email closer to the time to confirm your menu choices.
                    </p>
                @endif
                @if (session()->get('attending') === 'evening')
                    <p>
                        Thank you for confirming that you will be attending the evening of our wedding celebration on 1<sup>st</sup> February 2020.
                    </p>
                    <p>
                        You should receive an email in the next few minutes confirming your RSVP, as well as another email closer to the time with more details.
                    </p>
                @endif
                @if (session()->get('attending') === 'not attending')
                    <p>We're really sorry you can't make it to our wedding celebration</p>
                    <p>You should receive an email in the next few minutes confirming your RSVP.</p>
                @endif
                <p>If you haven't received the email in the next 30 minutes, please check your spam folder.</p>
            </div>
        </div>
    </div>
@stop
