<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Faker\Factory as Faker;

class GenerateRandomUsers extends Command
{
    protected $signature = 'generate:random-users {count=50}';
    protected $description = 'Generate random users with profile pictures';

    public function handle()
    {
        $faker = Faker::create();

        for ($i = 0; $i < $this->argument('count'); $i++) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => bcrypt('password'),
                'profile_picture' => 'chat-pic' . rand(0, 9) . '.jpg',
            ]);
        }

        $this->info('Random users generated successfully.');
    }
}
