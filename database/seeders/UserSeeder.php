<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(10)->create();

        $superadmin = User::factory()->create([
            'name' => 'Superadmin User',
            'email' => 'superadmin@example.com',
        ]);
        $superadmin->assignRole('Superadmin');

        $admin = User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
        ]);
        $admin->assignRole('Admin');

        $redaksi = User::factory()->create([
            'name' => 'Redaksi User',
            'email' => 'redaksi@example.com',
        ]);
        $redaksi->assignRole('Redaksi');

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
