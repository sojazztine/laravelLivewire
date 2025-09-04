{{-- @props(['items' => []])

<div class="breadcrumbs text-sm">
    <ul>
        @foreach($items as $index => $item)
            @if(isset($item['url']) && $index !== array_key_last($items))
                <li><a href="{{ $item['url'] }}">{{ $item['label'] }}</a></li>
            @else
                <li>{{ $item['label'] }}</li>
            @endif
        @endforeach
    </ul>
</div> --}}


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
                <li><a href="{{ $url }}">{{ $label }}</a></li>
            @endif
        @endforeach
    </ul>
</div>
