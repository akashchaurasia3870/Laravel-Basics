<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\people;
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
            NewStudentSeeder::class,
            // UserSeeder::class
        ]);
    }
}
