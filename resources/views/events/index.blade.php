<ul>
@foreach ($events as $event)
<li>{{ $event }}</li>
@endforeach
</ul>

<ul>
    @forelse ($events as $event)
    <li>{{ $event }}</li>
    @empty
    <li>No events available.</li>
    @endforelse
</ul>

<ul>
    @foreach ($events as $event)
        <li>
            {{ $event }}
            @if (strpos($event,'ANDROID') !== false)
                (sweet framework!)
                @elseif (strpos($event, 'Symphony') !== false)
                    (Sweet symphony is an old framework)
                @else (strpos($event, 'Laravel') !== false)
                    (I am using Laravel)
            @endif
        </li>
    @endforeach
</ul>

<img src="img/tennis1.jpeg">
<img src="{{ asset('img/tennis1.jpeg') }}">