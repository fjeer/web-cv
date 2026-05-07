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
        $superadmin = User::firstOrCreate(
            ['email' => 'fhm.pribadi@gmail.com'],
            [
                'name' => 'Superadmin User',
                'password' => bcrypt('password'),
            ]
        );
        $superadmin->assignRole('Superadmin');

        $admin = User::firstOrCreate(
            ['email' => 'fhm.fjer@gmail.com'],
            [
                'name' => 'Admin User',
                'password' => bcrypt('password'),
            ]
        );
        $admin->assignRole('Admin');

        $redaksi = User::firstOrCreate(
            ['email' => 'redaksi@example.com'],
            [
                'name' => 'Redaksi User',
                'password' => bcrypt('password'),
            ]
        );
        $redaksi->assignRole('Redaksi');
    }
}
