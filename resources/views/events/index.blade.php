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

<img src="/img/tennis1.jpeg">
<img src="{{ asset('img/tennis1.jpeg') }}">