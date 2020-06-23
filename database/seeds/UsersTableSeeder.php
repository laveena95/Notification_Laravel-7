<?php

use Illuminate\Database\Seeder;
use App\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Amitav Roy',
            'email' => 'reachme@amitavroy.com',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => 'Jhon Doe',
            'email' => 'jhon@amitavroy.com',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => 'Bob',
            'email' => 'bob@amitavroy.com',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => 'Charles Anderson',
            'email' => 'charles@amitavroy.com',
            'password' => bcrypt('password'),
        ]);
    }

    }

