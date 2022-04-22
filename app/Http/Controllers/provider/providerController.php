<?php

namespace App\Http\Controllers\provider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class providerController extends Controller
{
    public function index(){
        return view("web/provider");
    }
}
