<div>
    <x-header/>
    <x-card>
        {{-- <x-breadcrumbs :items="[
        ['label' => 'To do list', 'url' => route('todo.index')],
        ['label' => 'Create', 'url' => route('todo.create')]
        ]" /> --}}
        <x-breadcrumbs/>


    <form action="" wire:submit="update">

        <fieldset class="fieldset">
            <legend class="fieldset-legend">Title</legend>
            <input type="text" class="input" placeholder="Type here" wire:model="title"  value=""/>
             @error('title') <em class="text-red-500" x-data="{ show:true }" x-init="setTimeout(() => show = false, 5000)" x-show="show" >{{ $message }}</em> @enderror
        </fieldset>

        <fieldset class="fieldset">
            <legend class="fieldset-legend">Description</legend>
            <input type="text" class="input  " placeholder="Type here" wire:model="description" />
             @error('description') <em class="text-red-500" x-data="{ show:true }" x-init="setTimeout(() => show = false, 5000)" x-show="show" >{{ $message }}</em> @enderror
        </fieldset>

        <div class="flex justify-end">
            <flux:button type="submit" flux:button variant="primary" color="sky" class="cursor-pointer">Update</flux:button>
        </div>

    </form>



    </x-card>
</div>
