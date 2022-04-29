<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class Events extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.events');
    }
}
