<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Counter extends Component
{
    public string $lastName;

    /**
     * Create a new component instance.
     */

    public function __construct(
        public int $count, 
        public string $firstName, 
        string $lastName) {
            $this->lastName = $lastName; //property has to match the argument name
        }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.counter');
    }
}
