<?php

namespace App\Listeners;

use App\Events\EventDooney;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Storage;
class EventListenerDooney
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
     * @param  EventDooney  $event
     * @return void
     */
    public function handle(EventDooney $event)
    {
        //
        Storage::put('dooney.txt',$event->newdata);

    }
}
