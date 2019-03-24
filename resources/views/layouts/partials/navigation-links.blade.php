<a class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}">
    Home
    @if (request()->is('/'))
        <span class="sr-only">(current)</span>
    @endif
</a>
<a class="nav-item nav-link {{ request()->is('place') ? 'active' : '' }}" href="{{ route('place') }}">
    Place
    @if (request()->is('place'))
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
