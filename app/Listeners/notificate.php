<?php

namespace App\Listeners;

use App\Events\userRegistration;
use App\Models\notification;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use phpDocumentor\Reflection\Types\Parent_;

class notificate
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(userRegistration $event)
    {
        $this->update($event->parent);
    }


    public function update($parent){
         $user =  User::first();

        notification::create([
            'user_id'=> $user->id,
            'text' => $parent->name."registerd",
        ]);
    }
}
