<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'user1',
                'email' => 'user1@stickfigure.com',
                'password' => bcrypt('11223344'),
                'email_verified_at' => now()
            ],
            [
                'name' => 'user2',
                'email' => 'user2@stickfigure.com',
                'password' => bcrypt('11223344'),
                'email_verified_at' => now()
            ]
        ];

        foreach($users as $user) {
            User::create($user);
        }
    }
}
