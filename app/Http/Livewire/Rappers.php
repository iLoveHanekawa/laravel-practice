<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;


class Rappers extends Component
{

    public array $rappers = [];

    public function mount () {
        $response = Http::get('http://localhost:4000/rappers');
        if($response->ok()) {
            $this->rappers = json_decode($response->body(), true);
        }
    }

    public function render()
    {
        return view('livewire.rappers');
    }
}
