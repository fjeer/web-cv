<?php 

namespace App\Service;

use App\Notifications\PendaftarBaru;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Notification;

class NotificationService
{
    public function sendEmail($data)
    {
        Notification::route('mail','ilfanhs88bp@gmail.com')
                    ->notify(new PendaftarBaru($data));
    }

    public function sendWhatsapp($data)
    {
        // 1. Logika untuk menentukan Jenis dan Detail (Menangani jika daftar keduanya)
        $jenis = [];
        $detail = [];

        if ($data->training_id) {
            $jenis[] = 'Kursus';
            $detail[] = $data->training->kursus->nama_kursus;
        }

        if ($data->event_id) {
            $jenis[] = 'Event';
            $detail[] = $data->event->title;
        }

        $jenisDaftar = implode(' & ', $jenis);
        $detailDaftar = implode(', ', $detail);

        // 2. Eksekusi Kirim Pesan via Fonnte
        Http::withHeaders([
            'Authorization' => 'cxLaQWPAGTRtqZVreuTz'
        ])->asForm()->post('https://api.fonnte.com/send', [
                    'target' => '6282144356926',
                    'message' => "🔔 *NOTIFIKASI PENDAFTARAN BARU*\n\n" .
                        "Halo Admin, ada pendaftar baru dengan detail sebagai berikut:\n\n" .
                        "🆔 *No. Daftar:* " . $data->no_daftar . "\n" .
                        "👤 *Nama:* " . $data->name . "\n" .
                        "📧 *Email:* " . $data->email . "\n" .
                        "📱 *No. WA:* " . $data->phone . "\n" .
                        "📝 *Kategori:* " . $jenisDaftar . "\n" .
                        "📚 *Item/Judul:* " . $detailDaftar . "\n\n" .
                        "Silakan segera lakukan pengecekan dan validasi pembayaran di *Dashboard Admin*.\n\n" .
                        "Link: http://127.0.0.1:8000/admin"
                ]);
    }
}