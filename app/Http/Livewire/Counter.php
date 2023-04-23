<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\Livewire;

class Counter extends Component
{
    public int $count = 0;
    protected $listeners = ['incrementCount', 'increment'];

    public function mount(int $count) {
        $this->count = $count;
    }

    public function increment() {
        $this->count += 1;
    }

    public function navigate() {
        return redirect()->to(route('admin'));
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
