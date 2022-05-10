<?php

namespace App\Http\Controllers\parent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class parentController extends Controller
{
    public function index(){
        return view("web/parent");
    }


    public function showEdit(){
        return view('web/parentProfile');
    }
}
