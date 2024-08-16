<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create 1 admin
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        // Create 9 users
        User::factory(9)->create(); // These will have the 'user' role by default from the factory

        // Seed clients, projects, and tasks
        Client::factory(3)->create()->each(function ($client) {
            Project::factory(2)->create(['client_id' => $client->id])->each(function ($project) {
                Task::factory(4)->create(['project_id' => $project->id]);
            });
        });
    }
}
