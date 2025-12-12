<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class KursusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $kursus = [
            [
                'nama_kursus' => 'NGODING BASIC',
                'deskripsi_kursus' => 'Belajar dasar pemrograman menggunakan Python untuk pemula.',
                'id_kelas' => 2,
                'harga_kursus' => 250000,
                'rating_kursus' => 4.5,
                'gambar_kursus' => 'kursus1.png',
            ],
            [
                'nama_kursus' => 'JARINGAN DASAR',
                'deskripsi_kursus' => 'Belajar membuat website menggunakan HTML, CSS, dan JavaScript.',
                'id_kelas' => 1,
                'harga_kursus' => 300000,
                'rating_kursus' => 4.7,
                'gambar_kursus' => 'kursus2.png',
            ],
            [
                'nama_kursus' => 'JARINGAN MOBILE',
                'deskripsi_kursus' => 'Membangun aplikasi mobile menggunakan Flutter.',
                'id_kelas' => 1,
                'harga_kursus' => 350000,
                'rating_kursus' => 4.8,
                'gambar_kursus' => 'kursus3.png',
            ],
            [
                'nama_kursus' => 'NGODING UI/UX DESIGN',
                'deskripsi_kursus' => 'Belajar desain antarmuka modern menggunakan Figma.',
                'id_kelas' => 2,
                'harga_kursus' => 200000,
                'rating_kursus' => 4.6,
                'gambar_kursus' => 'kursus4.png',
            ],
        ];

        foreach ($kursus as $item) {
            DB::table('tb_kursus')->insert([
                'nama_kursus' => $item['nama_kursus'],
                'slug' => Str::slug($item['nama_kursus']),
                'deskripsi_kursus' => $item['deskripsi_kursus'],
                'id_kelas' => $item['id_kelas'],
                'harga_kursus' => $item['harga_kursus'],
                'rating_kursus' => $item['rating_kursus'],
                'gambar_kursus' => $item['gambar_kursus'],
                'created_at' => now()
            ]);
        }
    }
}
