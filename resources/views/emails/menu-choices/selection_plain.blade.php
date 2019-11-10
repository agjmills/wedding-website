Dear {{ $rsvp->name }},

It's only {{ $days }} days until our wedding celebration, and we hope you're as excited as we are!

We've sent you this email, as we'd like to know what you'd like to have to eat on the big day. So please click the link below
to be taken to your choices.

If you have any questions, or have any specific requirements which aren't met by the
choices provided, please get in touch ({{ route('contact') }}) with one of us, and we will help as best
we can.

Click here to make your food choices: {{ route('menu-choices.create', $rsvp) }}

We look forward to seeing you there!

Veronika & Alex
