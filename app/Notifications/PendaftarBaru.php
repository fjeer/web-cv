<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PendaftarBaru extends Notification
{
    use Queueable;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        $jenis = [];
        $detail = [];
        $totalHarga = 0;

        if ($this->data->training_id) {
            $jenis[] = 'Kursus';
            $detail[] = $this->data->training->kursus->nama_kursus;
            $totalHarga += (int) ($this->data->training->kursus->harga_kursus ?? 0);
        }

        if ($this->data->event_id) {
            $jenis[] = 'Event';
            $detail[] = $this->data->event->title;
            $totalHarga += (int) ($this->data->event->harga_event ?? 0);
        }

        return (new MailMessage)
            ->subject('[PENDAFTARAN BARU] - ' . $this->data->name)
            ->markdown('mail.pendaftar-baru', [
                'data' => $this->data,
                'jenisDaftar' => implode(' & ', $jenis),
                'detailDaftar' => implode(', ', $detail),
                'totalHarga' => $totalHarga,
                'detailUrl' => route('daftar.show', $this->data->no_daftar),
            ]);
    }

    public function toArray(object $notifiable): array
    {
        return [];
    }
}
