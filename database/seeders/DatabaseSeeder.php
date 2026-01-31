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
    // public function run(): void
    // {
    //     // User::factory(10)->create();

    //     User::factory()->create([
    //         'name' => 'Test User',
    //         'email' => 'test@example.com',
    //     ]);
    // }
    public function run(): void
    {
        $this->call([
            KelasSeeder::class,
            KursusSeeder::class,
            UserSeeder::class,
            BeritaSeeder::class,
            KategoriSeeder::class,
            EventSeeder::class,
            LayananSeeder::class,
        ]);
    }
}
