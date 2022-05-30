<?php

namespace App\Http\Livewire;

use App\Models\event;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddEvent extends Component
{
    use WithFileUploads;
    public $name;
    public $desc;
    public $startDate;
    public $endDate;
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
        return view('livewire.add-event');
    }

    public function emptyInputs(){
        $this->name = '';
        $this->startDate = '';
        $this->endDate = '';
        $this->desc = '';
        $this->image = '';
    }

    public function AddEvent(){
        $this->validate();

       $photo = $this->image->store('uploads/events' ,'public');

        event::create([
            'name'=>$this->name,
            'startDate'=>$this->startDate,
            'endDate' =>$this->endDate,
            'image' => $photo,
            'desc' =>$this->desc,

        ]);
        $this->emptyInputs();

        return session()->flash('success' , "event added successfully");


    }




}
