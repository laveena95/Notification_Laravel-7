<?php

namespace App\Providers;

use App\Providers\StoryEmailNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class StoryEmailNotificationListener
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
     * @param  StoryEmailNotification  $event
     * @return void
     */
    public function handle(StoryEmailNotification $event)
    {
        //
    }
}
