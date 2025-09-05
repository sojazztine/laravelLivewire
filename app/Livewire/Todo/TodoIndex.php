<?php

namespace App\Livewire\Todo;

use App\Models\Todo;
use Livewire\Component;

class TodoIndex extends Component
{

    public $confirmingTodoDeletion;

    public function confirmTodoDeletion($id){
        $this->confirmingTodoDeletion = $id;
    }

    public function deleteTodo(){
        if($this->confirmingTodoDeletion){
            Todo::find($this->confirmingTodoDeletion)->delete();
            $this->confirmingTodoDeletion = null;
        }
        session()->flash('success', 'Todo Deleted Successfully');
    }

    public function render()
    {
        $todos = Todo::get();
        return view('livewire.todo.todo-index' , compact('todos'));
    }
}
