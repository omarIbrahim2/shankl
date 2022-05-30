<?php

namespace App\Http\Livewire;

use App\Models\child;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditChildParent extends Component
{
    use WithFileUploads;
    public $name;
    public $birth_date;
    public $age;
    public $grade;
    public $Avatar;

   public $authParent;
   public $selectedChild;
    public $childs;

    public $childiD;

    protected $listeners = [

        "fresh" => '$refresh',
        "deleteConfirmed"=> "deleteChild",



];

   protected $rules = [
     'name' => 'required|string',
     'birth_date' => 'required',
     'age' => 'required|numeric',
     'grade' => 'required|string',
     'Avatar' => 'image|mimes:jpg,png,jpeg,gif,svg|max:1024',

   ];
    public function render()
    {
         $this->childs = $this->authParent->childs;
        return view('livewire.edit-child-parent')->with(["childs" => $this->childs]);
    }




    public function fillInputs($child){

        $this->name = $child["name"];
        $this->birth_date= $child["birth_date"];
        $this->age = $child["age"];
        $this->grade = $child["grade"];
        $this->Avatar = $child["Avatar"];
        $this->selectedChildId = $child["id"];

    }


    public function updateChild(){


        $this->validate();

         $selectedChild =  child::findOrFail($this->selectedChildId);

         $photo = $this->Avatar->store('storage/uploads/childs' ,'public');
         //dd($photo);
          $selectedChild->update([
              'name' => $this->name,
              'birth_date' => $this->birth_date,
              'age' => $this->age,
              'grade'=>$this->grade,
              'Avatar' => $photo,
          ]);

          $this->emit("fresh");
          $this->dispatchBrowserEvent("updateChild");

    }


    public function deleteChild(){
       $selectedChild = child::findOrFail($this->childiD);


      if ($selectedChild->Avatar !== '') {
          Storage::delete('public'.$selectedChild->Avatar);
      }

       $selectedChild->delete();


      $this->dispatchBrowserEvent("deleteChild");

         $this->emit('fresh');

    }



    public function ChildDeleting($childId){
        $this->childiD = $childId;
        $this->dispatchBrowserEvent("childDelete");
    }
}
