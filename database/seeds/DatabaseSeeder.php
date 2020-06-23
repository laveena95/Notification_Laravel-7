<?php

use Illuminate\Database\Seeder;
use App\Story;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->addingStories();
    }

    private function addingStories()
    {
        Story::create([
            'title' => 'Work on the user assignment feature',
            'description' => 'Need to be able to assign multiple users to a story who will be working on that ticket.',
            'due_date' => now()->addDay(2),
            'story_points' => 2,
            'story_type' => 'enhancement',
            'user_id' => 1,
            'epic_id' => 1,
        ])->users()->createMany([
            ['user_id' => 2],
            ['user_id' => 1],
        ]);

        Story::create([
            'title' => 'Send email for story assignment',
            'description' => 'When users are assigned to a ticket, the user should be emailed as a notification.',
            'due_date' => now()->addDay(2),
            'story_points' => 4,
            'story_type' => 'enhancement',
            'user_id' => 1,
            'epic_id' => 1,
        ])->users()->createMany([
            ['user_id' => 2],
            ['user_id' => 1],
            ['user_id' => 3],
            ['user_id' => 4],
        ]);
    }

}
