<?php

namespace App\Http\Controllers\child;

use App\Models\child;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Http\Responses\RegisterResponse;

class childController extends Controller
{
    public function index($parent){
       // dd($parent);
        return view("web.addChild")->with("parent" , $parent);

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

       $x = child::create([
            'name' => $request->name,
            'age' => $request->age,
            'birth_date' => $request->birth_date,
            'grade' => $request->grade,
            'Avatar' => $request->Avatar,
            'parentt_id' => $request->parentt_id,
        ]);


        return app(RegisterResponse::class);
    }
}
