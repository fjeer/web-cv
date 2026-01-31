<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $berita = [
            [
                'title' => 'Berita Pertama',
                'slug' => 'berita-pertama',
                'detail_berita' => 'Ini adalah detail berita pertama.',
                'id_author' => 1,
                'tanggal_berita' => '2024-06-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Berita Kedua',
                'slug' => 'berita-kedua',
                'detail_berita' => 'Ini adalah detail berita kedua.',
                'id_author' => 2,
                'tanggal_berita' => '2024-06-02',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Berita Ketiga',
                'slug' => 'berita-ketiga',
                'detail_berita' => 'Ini adalah detail berita ketiga.',
                'id_author' => 1,
                'tanggal_berita' => '2024-06-03',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        foreach ($berita as $item) {
            DB::table('tb_berita')->insert([
                'title' => $item['title'],
                'slug' => $item['slug'],
                'detail_berita' => $item['detail_berita'],
                'id_author' => $item['id_author'],
                'tanggal_berita' => $item['tanggal_berita'],
                'created_at' => $item['created_at'],
                'updated_at' => $item['updated_at'],
            ]);
        }

    }
}
