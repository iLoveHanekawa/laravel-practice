<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Http;

use Livewire\Component;

class Hello extends Component
{
    public string $greet = '';
    public function mount() {
        $response = Http::get('http://127.0.0.2/api/hello');
        if($response->ok()) {
            $this->greet = $response->body();
        }
    }
    public function render()
    {
        return view('livewire.hello');
    }
}
