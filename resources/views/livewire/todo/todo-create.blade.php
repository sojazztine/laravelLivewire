<div>
    <x-header/>
    <x-card>
        {{-- <x-breadcrumbs :items="[
        ['label' => 'To do list', 'url' => route('todo.index')],
        ['label' => 'Create', 'url' => route('todo.create')]
        ]" /> --}}
        <x-breadcrumbs/>


    <form action="" wire:submit="submit">

        <fieldset class="fieldset">
            <legend class="fieldset-legend">Title</legend>
            <input type="text" class="input" placeholder="Type here" wire:model="title" />
            <em class="label">Optional</em>
        </fieldset>

        <fieldset class="fieldset">
            <legend class="fieldset-legend">Description</legend>
            <input type="text" class="input  " placeholder="Type here" wire:model="description" />
            <em class="label">Optional</em>
        </fieldset>

        <div class="flex justify-end">
            <flux:button type="submit" flux:button variant="primary" color="sky" class="cursor-pointer">Create</flux:button>
        </div>

    </form>



    </x-card>
</div>
