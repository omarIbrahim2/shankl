<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EditChildParent extends Component
{
    public $childName;
    public $childBirth;
    public $childAge;
    public $EduStage;
    public $childImg;

   public $authParent;
    public function render()
    {

        return view('livewire.edit-child-parent')->with(["childs" => $this->authParent->childs]);
    }


    public function fillInputs($child){

        $this->childName = $child["name"];
        $this->childBirth= $child["birth_date"];
        $this->childAge = $child["age"];
        $this->EduStage = $child["grade"];
        $this->childImg = $child["Avatar"];
        //$this->emit("child data" , $child);
    }
}
