<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // people::factory()->count(5)->create();
        // new_student::factory()->count(11)->create();
        $this->call([
            UserSeeder::class,
            StudentSeeder::class,
            CitieSeeder::class
        ]);
    }
}
