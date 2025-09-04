<div>
    <x-header/>

    <x-card
    title="Todo List"
    href="{{ route('todo.create') }}"
    >

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
                    <flux:icon name="trash" class="cursor-pointer text-red-800"  />
                </div>
            </th>
        </tr>

        @endforeach

    </x-table>

    </x-card>
</div>
