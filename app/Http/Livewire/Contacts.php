<?php

namespace App\Http\Livewire;

use App\Models\contact;
use Livewire\Component;

class Contacts extends Component
{


  public $name;
  public $email;
  public $subject;
  public $message;

    public function render()
    {
        return view('livewire.contacts');
    }

    protected $rules=[
       'name' => 'required|string',
       'email'=>'required|email',
       'subject'=>'required|string',
       'message'=> 'required|string',
    ];


    public function sendMessage(){
         $this->validate();

         contact::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'subject'=>$this->subject,
            'message'=>$this->message,
         ]);

         session()->flash("succsess" , 'message sent successfully');
    }
}
