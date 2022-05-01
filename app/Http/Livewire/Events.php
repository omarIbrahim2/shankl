<?php

namespace App\Http\Livewire;

use App\Models\event;
use Livewire\Component;
use Livewire\WithPagination;

class Events extends Component
{
    use WithPagination;


    public function render()

    {
        $events = event::paginate(5);
        return view('livewire.events')->with(["events" => $events]);
    }

    public function paginationView()
    {
        return 'Pagination-links';
    }
}
