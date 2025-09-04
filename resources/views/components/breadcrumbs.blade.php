@php
    $segments = request()->segments();
@endphp

<div class="breadcrumbs text-sm">
    <ul>
        {{-- <li><a href="{{ url('/') }}">Home</a></li>s --}}

        @foreach($segments as $index => $segment)
            @php
                $url = url(implode('/', array_slice($segments, 0, $index + 1)));
                $label = ucfirst(str_replace('-', ' ', $segment));
            @endphp

            @if($loop->last)
                <li>{{ $label }}</li>
            @else
                <li><a href="{{ $url }}">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        class="h-4 w-4 stroke-current">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                    </svg>
                    {{ $label }}
                    </a>
                </li>
            @endif
        @endforeach
    </ul>
</div>
