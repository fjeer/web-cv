<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelas = [
            [
                'nama_kelas' => 'Kelas Jaringan',
                'slug' => 'kelas-jaringan',
            ],
            [
                'nama_kelas' => 'Kelas Pemrograman',
                'slug' => 'kelas-pemrograman',
            ],
        ];

        foreach ($kelas as $item) {
            DB::table('tb_kelas')->insert([
                'nama_kelas' => $item['nama_kelas'],
                'slug' => $item['slug'],
                'created_at' => now()
            ]);
        }
    }
}
