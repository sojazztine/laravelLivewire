    <flux:header class="mb-5">
        <flux:navbar scrollable>
            <flux:navbar.item href="#"  wire:navigate >{{ ('Dashboard') }}</flux:navbar.item>
            <flux:navbar.item href="#" :href="route('todo.index')" :current="request()->routeIs('todo.index')" wire:navigate >{{ ('Todo list') }}</flux:navbar.item>
            <flux:navbar.item href="#" wire:navigate>Catalog</flux:navbar.item>
            <flux:navbar.item href="#" wire:navigate>Configuration</flux:navbar.item>
        </flux:navbar>
    </flux:header>
