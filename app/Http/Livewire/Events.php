<?php

namespace App\Http\Livewire;

use App\Models\event;
use Livewire\Component;
use Livewire\WithPagination;

class Events extends Component
{
    use WithPagination;



    protected $listeners = ["deleteConfirmed" =>'deleteEvent'];

    public $deletid = null;
    public function render()

    {
        $events = event::paginate(10);
        return view('livewire.events')->with(["events" => $events]);
    }

    public function paginationView()
    {
        return 'Pagination-links';

    }

   public function eventDeleting($eventId)
   {
       $this->deletid = $eventId;
       $this->dispatchBrowserEvent("confirmDelete");


   }

   



    public function deleteEvent(){
        $event = event::findOrFail($this->deletid);

        $event->delete();

        session()->flash('message' , 'event deleted successfully');
    }


}
