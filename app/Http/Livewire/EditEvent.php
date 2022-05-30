<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class EditEvent extends Component
{
    use WithFileUploads;

   public $event;
   public $name;
   public $startDate;
   public $endDate;
   public $desc;
   public $image;

   protected $rules = [
    'name' => 'required|string',
    'desc' => 'required|string',
    'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:1024',
    'startDate' => 'required|after_or_equal:today',
    'endDate' => 'required|after_or_equal:startDate',
   ];

    public function render()
    {

        return view('livewire.edit-event');
    }

    public function mount(){
        $this->name = $this->event->name;
        $this->startDate = $this->event->startDate;
        $this->endDate = $this->event->endDate;
        $this->desc = $this->event->desc;
        $this->image = $this->event->image;
    }


    public function UpdateEvent()
    {
        $this->validate();

        $photo = $this->image->store('uploads/events' ,'public');

        $this->event->update([
            'name' => $this->name,
            'desc' => $this->desc,
            'startDate' => $this->startDate,
            'endDate'=> $this->endDate,
            'image' => $photo,
        ]);

        return session()->flash('updated' , 'event updated successfully');
    }



}
