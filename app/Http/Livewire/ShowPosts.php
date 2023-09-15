<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowPosts extends Component
{
    public $name;
    public $message;
    public function mount($name)
    {
        $this->name = $name;
    }

    public function render()
    {
        return view('livewire.show-posts');
    }
}
