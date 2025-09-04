<?php

namespace App\Livewire\Todo;

use App\Models\Todo;
use Livewire\Component;

class TodoIndex extends Component
{

    public function render()
    {
        $todos = Todo::get();
        return view('livewire.todo.todo-index' , compact('todos'));
    }
}
