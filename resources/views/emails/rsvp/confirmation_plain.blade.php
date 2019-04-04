Thank you for your RSVP.

@if ($rsvp->attending ==='attending')
  Thank you for confirming that you will be attending our wedding celebration on 1<sup>st</sup> February 2020 at 1pm.

  You will receive another email closer to the date of our wedding celebration with some more information, such as the schedule of the day, and places to stay near Ombersley.
@endif

@if ($rsvp->attending === 'evening')
  Thank you for confirming that you will be attending the evening of our wedding celebration on 1<sup>st</sup> February 2020.

  You will receive another email closer to the date of our wedding celebration with some more information, such as the schedule of the day, and places to stay near Ombersley.
@endif

@if ($rsvp->attending === 'not attending')
  We're really sorry you can't make it to our wedding celebration
@endif
