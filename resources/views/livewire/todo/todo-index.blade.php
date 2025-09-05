<div>
    <x-header/>

    <x-card
    title="Todo List"
    href="{{ route('todo.create') }}"
    >

    @if(session('success'))
        <div role="alert" class="alert alert-success alert-soft" x-data="{ show:true }"
            x-init=" setTimeout(() => show = false, 5000)" x-show="show">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span>{{ session('success') }}</span>
        </div>
    @endif

    <x-table>
        <x-slot:thead>
            <th>#</th>
            <th>Name</th>
            <th>Description</th>
            <th>Action</th>
        </x-slot:thead>

        @foreach ($todos as $todo )
        <tr>
            <th wire:key="$todo->id">{{ $todo->id }}</th>
            <th>{{ $todo->title }}</th>
            <th>{{ $todo->description }}</th>
            <th>
                <div class="flex">
                   <a href="{{ route('todo.edit', $todo->id) }}" ><flux:icon name="pencil-square" class="cursor-pointer text-green-800 mr-2"  /></a>
                    <flux:icon name="trash" class="cursor-pointer text-red-800"  wire:click.prevent="confirmTodoDeletion({{ $todo->id }})" />
                </div>
            </th>
        </tr>

        @endforeach

    </x-table>

    @empty($todos)
        <div class="text-center p-4">
            No records found
        </div>
    @endempty

<x-delete-modal
    confirm="deleteTodo"
    cancel="$set('confirmingTodoDeletion', null)"
    :show="$confirmingTodoDeletion !== null"
>

</x-delete-modal>
    </x-card>
</div>
