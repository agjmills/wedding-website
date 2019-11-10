Thank you!
Your menu choices have been submitted, and a summary of them is below. If you with to make any changes, please get in touch ({{ route('contact') }})

Adults

@foreach($rsvp->adult_choices as $adult)
Name: {{ $adult->name }}
Starter: {{ $adult->starter->name }}
Main Course: {{ $adult->main_course->name }}
Dessert: {{ $adult->dessert->name }}
Special Requirements: {{ $adult->dietary }}

@endforeach

Children

@foreach($rsvp->child_choices as $child)
Name: {{ $child->name }}
Starter: {{ $child->starter ? $child->starter->name : 'No starter' }}
Main Course: {{ $child->main_course ? $child->main_course->name : 'No main course' }}
Dessert: {{ $child->dessert ? $child->dessert->name : 'No dessert' }}
Special Requirements: {{ $child->dietary }}

@endforeach
