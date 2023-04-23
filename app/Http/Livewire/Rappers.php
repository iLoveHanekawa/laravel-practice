<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;


class Rappers extends Component
{

    public array $rappers = [];

    public function mount () {
        $response = Http::get('http://127.0.0.1:8000/api/rappers');
        if($response->ok()) {
            $this->rappers = json_decode($response->body(), true);
        }
    }

    public function render()
    {
        return view('livewire.rappers');
    }
}
