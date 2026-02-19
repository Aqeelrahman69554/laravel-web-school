<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            ContactSeeder::class,
            HomeSeeder::class,
            AboutSeeder::class,
            About2Seeder::class,
            Class1Seeder::class,
            Class2Seeder::class,
            GallerySeeder::class,
            TeacherSeeder::class,
            Teacher2Seeder::class,
            BlogGridSeeder::class,
            BlogDetailSeeder::class,
            BlogDetailSeeder_2::class,
            ContactSeeder::class,
            FooterSeeder::class,
        ]);
    }
}
