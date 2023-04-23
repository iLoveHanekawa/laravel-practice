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
        // return to_route('admin');
    }

    public function navigateToUserId() {
        $id = 10;
        // return redirect()->to("/api/user/{$id}", 302);
        return to_route('user', ['id' => $id]);
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
