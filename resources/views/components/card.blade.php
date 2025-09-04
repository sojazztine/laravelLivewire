@props(['title' => null, 'href' => null ])
<div class="card bg-neutral text-neutral-content w-full">
        <div class="card-body">

            <div class="flex justify-between">
                <h2 class="card-title">{{ $title }}</h2>
                @if($href)
                    <flux:button variant="primary" color="emerald" class="cursor-pointer" href="{{ $href }}">Create</flux:button>
                @endif
            </div>
            {{ $slot }}
        </div>
</div>
