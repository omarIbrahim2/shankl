<?php

namespace App\Http\Controllers\child;

use App\Models\child;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Http\Responses\RegisterResponse;

class childController extends Controller
{
    public function index($parent){
       // dd($parent);
        return view("web.parent.addChild")->with("parent" , $parent);

    }


    public function addChild(Request $request){
       // dd($request->all());
        Validator::make($request->all(), [
            'name' =>['required' , 'string'],
            'age' => ['required' , 'numeric'],
            'birth_date'=>['required'],
            'grade' =>['required'],
            'Avatar' => ['required' , 'string'],
        ])->validate();
            $Photopath = Storage::putFile('public/uploads/childs' , $request->Avatar);
            $modifiedPhoto =substr($Photopath ,  6);
       $x = child::create([
            'name' => $request->name,
            'age' => $request->age,
            'birth_date' => $request->birth_date,
            'grade' => $request->grade,
            'Avatar' => $modifiedPhoto,
            'parentt_id' => $request->parentt_id,
        ]);

         return redirect()->route('parent');
        //return app(RegisterResponse::class);
    }
}
