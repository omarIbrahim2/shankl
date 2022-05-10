<?php

namespace App\Http\Livewire;

use auth;
use App\Models\parentt;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class ParentProfile extends Component
{

    public $name;
    public $email;
    public $phone;
    public $password;
    public $password_confirmation;
    public $authParent ;




    protected $rules= [
      'name' => 'required|string',
      'email' => 'required|email',
      'phone' => 'required|string|max:8',
      'password' =>'required|string|min:8|confirmed',
    ];


    public function mount(){
        $this->authParent = auth('parent')->user();

        $this->name = auth("parent")->user()->name;
        $this->email = auth("parent")->user()->email;
        $this->phone = auth("parent")->user()->phone;



    }

    public function render()
    {
        $childs = $this->authParent->childs;

       // dd($childs);
        return view('livewire.parent-profile');
    }

    public function update()
    {
        $this->validate();


      $this->authParent->update([
        'name' => $this->name,
        'email' => $this->email,
        'phone' => $this->phone,
        'password'=> Hash::make($this->password),
       ]);


        return session()->flash('success' , "profile updated successfully");
    }



    



}
