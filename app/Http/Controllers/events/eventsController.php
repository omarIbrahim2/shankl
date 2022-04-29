<?php

namespace App\Http\Controllers\events;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class eventsController extends Controller
{
    public function showEvents(){
        return view('admin.events');
    }
}
