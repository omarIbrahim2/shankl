<?php

namespace App\Http\Controllers\supplier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class supplierController extends Controller
{
    public function index(){
        return view('web/supplier');
    }
}
