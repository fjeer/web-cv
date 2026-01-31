<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategori = [
            [
                'nama_kategori' => 'Kategori A',
            ],
            [
                'nama_kategori' => 'Kategori B',
            ],
            [
                'nama_kategori' => 'Kategori C',
            ],
        ];

        foreach ($kategori as $item) {
            DB::table('tb_kategori')->insert([
                'nama_kategori' => $item['nama_kategori'],
                'slug' => Str::slug($item['nama_kategori']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
