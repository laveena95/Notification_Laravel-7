<?php

namespace App\Actions\Story;

use App\User;
use App\Story;
use App\Notifications\Stories\StoryAssigned;
use Illuminate\Support\Facades\Notification;

class StoryEmailNotification
{
    public function execute(Story $story)
    {
        $story = Story::with(['users'])
            ->where('id', $story->id)
            ->first();

        $assignedUsers = $story->users->pluck('user_id');

        $users = User::whereIn('id', $assignedUsers)->get();

        Notification::send($users, new StoryAssigned($story));
    }
}

