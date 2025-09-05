<?php

namespace App\Livewire\Todo;

use App\Models\Todo;
use Livewire\Component;

class TodoEdit extends Component
{
    public $title, $description, $todoId;

    public function mount($id)
    {
        $todo = Todo::find($id);
        $this->todoId = $id;
        $this->title = $todo->title;
        $this->description = $todo->description;
    }

    public function update(){

        $this->validate([
            'title' => 'required',
            'description'=> 'required'
        ]);

        $todo = Todo::findOrFail($this->todoId);

        $todo->update([
            'title' => $this->title,
            'description' => $this->description,
        ]);
        session()->flash('success', 'Todo Updated Successfully');
        return redirect()->to('/todo');

    }

    public function render()
    {
        return view('livewire.todo.todo-edit');
    }
}
