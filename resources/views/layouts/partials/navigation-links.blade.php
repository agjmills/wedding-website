<a class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}">
    Home
    @if (request()->is('/'))
        <span class="sr-only">(current)</span>
    @endif
</a>
<a class="nav-item nav-link {{ request()->is('venue') ? 'active' : '' }}" href="{{ route('venue') }}">
    Venue
    @if (request()->is('venue'))
        <span class="sr-only">(current)</span>
    @endif
</a>
<a class="nav-item nav-link {{ request()->is('order-of-service') ? 'active' : '' }}" href="{{ route('order-of-service') }}">
    Order of Service
    @if (request()->is('order-of-service'))
        <span class="sr-only">(current)</span>
    @endif
</a>
<a class="nav-item nav-link" {{ request()->is('gifts') ? 'active' : '' }} href="{{ route('gifts') }}">
    Gifts
    @if (request()->is('gifts'))
        <span class="sr-only">(current)</span>
    @endif

</a>
<a class="nav-item nav-link {{ request()->is('accommodations') ? 'active' : '' }}" href="{{ route('accommodations') }}">
    Accommodations
    @if (request()->is('accommodations'))
        <span class="sr-only">(current)</span>
    @endif
</a>
<a class="nav-item nav-link {{ request()->is('rsvp') ? 'active' : '' }}" href="{{ route('rsvp.index') }}">
    RSVP
    @if (request()->is('rsvp'))
        <span class="sr-only">(current)</span>
    @endif
</a>

<a class="nav-item nav-link {{ request()->is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">
    Contact
    @if (request()->is('contact'))
        <span class="sr-only">(current)</span>
    @endif
</a>
