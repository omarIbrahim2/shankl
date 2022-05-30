<?php

namespace App\Http\Controllers\events;

use App\Http\Controllers\Controller;
use App\Models\event;
use Illuminate\Http\Request;

class eventsController extends Controller
{
    public function showEvents(){
        return view('admin.events');
    }

    public function create(){
        return view('admin.addEvent');
    }


    public function showEdit($eventId){
        $event = event::findOrFail($eventId);

        return view('admin.editEvent')->with([
            'event' => $event,
        ]);
    }
}
