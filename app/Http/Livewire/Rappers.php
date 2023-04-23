<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Rappers extends Component
{
    public string $name = '';
    public string $description = '';

    public function mount (string $name, string $description) {
        $this->name = $name;
        $this->description = $description;
    }

    public function render()
    {
        return view('livewire.rappers');
    }
}
