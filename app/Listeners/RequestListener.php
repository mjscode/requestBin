<?php

namespace App\Listeners;

use App\Events\Request;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class RequestListener implements ShouldQueue
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
     * @param  Request  $event
     * @return void
     */
    public function handle(Request $event)
    {
        //
    }
}
