<?php

namespace App\Listeners;

use App\Actions\Story\StoryEmailNotification;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Story;

class StoryCreateListener implements ShouldQueue
{
    /**
     * @var StoryEmailNotification
     */
    private $notification;

    /**
     * StoryCreateListener constructor.
     * @param StoryEmailNotification $notification
     */
    public function __construct(StoryEmailNotification $notification)
    {
        $this->notification = $notification;
    }

    public function handle($event)
    {
        $this->notification->execute($event->story);
    }
}
