<?php

namespace App\Events\Story;

use App\Story;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class StoryCreate
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * @var Story
     */
    public $story;

    public function __construct(Story $story)
    {
        $this->story = $story;
    }

    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}

