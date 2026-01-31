<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $layanan = [
            [
                'nama_layanan' => 'Training Center',
                'deskripsi_layanan' => 'Pelatihan profesional di bidang jaringan, desain, dan pemrograman disusun oleh praktisi berpengalaman.',
            ],
            [
                'nama_layanan' => 'IT Consultant',
                'deskripsi_layanan' => 'Analisis dan strategi implementasi teknologi untuk optimalkan performa bisnis Anda.'
            ],
            [
                'nama_layanan' => 'Jasa Instalasi Jaringan',
                'deskripsi_layanan' => 'Solusi infrastruktur jaringan handal untuk kantor, sekolah, hingga instansi pemerintahan.'
            ],
            [
                'nama_layanan' => 'Jasa Desain',
                'deskripsi_layanan' => 'Branding, desain grafis, UI/UX membuat citra visual perusahaan Anda lebih kuat.'
            ],
            [
                'nama_layanan' => 'Software Development',
                'deskripsi_layanan' => 'Pengembangan aplikasi berbasis web dan mobile yang disesuaikan dengan kebutuhan bisnis Anda.'
            ],
            [
                'nama_layanan' => 'Event Organizer',
                'deskripsi_layanan' => 'Perencanaan dan pelaksanaan acara korporat, seminar, workshop, hingga peluncuran produk secara profesional.'
            ]
        ];

        foreach ($layanan as $item) {
            DB::table('tb_layanan')->insert([
                'nama_layanan' => $item['nama_layanan'],
                'deskripsi_layanan' => $item['deskripsi_layanan'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
