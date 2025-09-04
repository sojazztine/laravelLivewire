<?php

namespace App\Livewire\Todo;

use App\Models\Todo;
use Livewire\Component;

class TodoCreate extends Component
{

    public $title , $description;

    public function submit(){
        $this->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        Todo::create([
            'title' => $this->title,
            'description' => $this->description,
        ]);
        $this->reset(['title', 'description']);
        session()->flash('success', 'Todo Added!');
        return redirect()->route('todo.index');
    }

    public function render()
    {
        return view('livewire.todo.todo-create');
    }

}
