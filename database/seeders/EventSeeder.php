<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $event = [
            [
                'title' => 'Event Pertama',
                'slug' => 'event-pertama',
                'detail_event' => 'Ini adalah detail event pertama.',
                'id_kategori' => 1,
                'gambar_event' => 'event1.jpg',
                'lokasi' => 'Jakarta',
                'kuota' => 100,
                'tanggal_event' => '2024-07-01',
                'status_event' => 1,
            ],
            [
                'title' => 'Event Kedua',
                'slug' => 'event-kedua',
                'detail_event' => 'Ini adalah detail event kedua.',
                'id_kategori' => 2,
                'gambar_event' => 'event2.jpg',
                'lokasi' => 'Bandung',
                'kuota' => 150,
                'tanggal_event' => '2024-08-15',
                'status_event' => 1,
            ],
            [
                'title' => 'Event Ketiga',
                'slug' => 'event-ketiga',
                'detail_event' => 'Ini adalah detail event ketiga.',
                'id_kategori' => 3,
                'gambar_event' => 'event3.jpg',
                'lokasi' => 'Surabaya',
                'kuota' => 200,
                'tanggal_event' => '2024-09-10',
                'status_event' => 0,
            ],
            [
                'title' => 'Event Keempat',
                'slug' => 'event-keempat',
                'detail_event' => 'Ini adalah detail event keempat.',
                'id_kategori' => 1,
                'gambar_event' => 'event4.jpg',
                'lokasi' => 'Yogyakarta',
                'kuota' => 120,
                'tanggal_event' => '2024-10-05',
                'status_event' => 1,
            ],
        ];
        foreach ($event as $item) {
            DB::table('tb_event')->insert([
                'title' => $item['title'],
                'slug' => $item['slug'],
                'detail_event' => $item['detail_event'],
                'id_kategori' => $item['id_kategori'],
                'gambar_event' => $item['gambar_event'],
                'lokasi' => $item['lokasi'],
                'kuota' => $item['kuota'],
                'tanggal_event' => $item['tanggal_event'],
                'status_event' => $item['status_event'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
