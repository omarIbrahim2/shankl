<?php

namespace App\Http\Livewire;

use auth;
use App\Models\parentt;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Livewire\WithFileUploads;

class ParentProfile extends Component
{
    use WithFileUploads;

    public $name;
    public $email;
    public $phone;
    public $password;
    public $password_confirmation;
    public $authParent ;
    public $image;



    protected $rules= [
      'name' => 'required|string',
      'email' => 'required|email',
      'phone' => 'required|string|max:8',
      'password' =>'required|string|min:8|confirmed',
      'image'   =>  'image|mimes:jpg,png,jpeg,gif,svg|max:1024',
    ];


    public function mount(){
        $this->authParent = auth('parent')->user();

        $this->name = auth("parent")->user()->name;
        $this->email = auth("parent")->user()->email;
        $this->phone = auth("parent")->user()->phone;
        $this->image = auth("parent")->user()->image;


    }

    public function render()
    {

        return view('livewire.parent-profile');
    }

    public function update()
    {
        $this->validate();

        if ($this->image !== '') {

            $parentPhoto = $this->image->store('uploads/parents' ,'public');
        }


      $this->authParent->update([
        'name' => $this->name,
        'email' => $this->email,
        'phone' => $this->phone,
        'password'=> Hash::make($this->password),
        'image' => $parentPhoto,
       ]);


        return session()->flash('success' , "profile updated successfully");
    }







}
