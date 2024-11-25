<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Attributes\Validate;
use Livewire\Component;

class TodoLivewire extends Component
{

    #[Validate('require', message: 'You need to fill title')]
    public $title;

    public function render()
    {
        return view('livewire.todo-livewire');
    }

    public function store ()
    {
        $this->validate();
        Todo::create(['title' => $this->title]);
        $this->title = '';
    }
}
