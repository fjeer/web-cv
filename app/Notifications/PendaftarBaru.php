<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PendaftarBaru extends Notification
{
    use Queueable;

    public $data;
    /**
     * Create a new notification instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database', 'mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        // Logika penentuan label Jenis & Detail
        $jenis = [];
        $detail = [];
        if ($this->data->training_id) {
            $jenis[] = 'Kursus';
            $detail[] = $this->data->training->kursus->nama_kursus;
        }
        if ($this->data->event_id) {
            $jenis[] = 'Event';
            $detail[] = $this->data->event->title;
        }

        $jenisDaftar = implode(' & ', $jenis);
        $detailDaftar = implode(', ', $detail);

        return (new MailMessage)
            ->subject('🔔 [PENDAFTARAN BARU] - ' . $this->data->name)
            ->markdown('mail.pendaftar-baru', [
                'data' => $this->data,
                'jenisDaftar' => $jenisDaftar,
                'detailDaftar' => $detailDaftar
            ]);
    }

    /**
     * Get the database representation of the notification.
     */
    public function toDatabase(object $notifiable): array
    {
        $jenis = [];
        $detail = [];
        if ($this->data->training_id) {
            $jenis[] = 'Kursus';
            $detail[] = $this->data->training->kursus->nama_kursus;
        }
        if ($this->data->event_id) {
            $jenis[] = 'Event';
            $detail[] = $this->data->event->title;
        }

        return [
            'title' => 'Pendaftaran Baru',
            'message' => $this->data->name . ' telah melakukan pendaftaran',
            'no_daftar' => $this->data->no_daftar,
            'nama' => $this->data->name,
            'email' => $this->data->email,
            'phone' => $this->data->phone,
            'jenis_daftar' => implode(' & ', $jenis),
            'type' => 'registration',
        ];
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
