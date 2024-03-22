<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'id' => 3,
            'name' => 'Test User',
            'email' => 'test3@example.com',
            'password' => bcrypt('passkey123'),
        ]);
        Task::factory(100)->create();
    }
}
