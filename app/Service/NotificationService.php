<?php

namespace App\Service;

use App\Notifications\PendaftarBaru;
use Illuminate\Support\Facades\Notification;

class NotificationService
{
    public function sendEmail($data)
    {
        $admins = \App\Models\User::role(['Admin', 'Superadmin'])->get();

        if ($admins->isNotEmpty()) {
            Notification::send($admins, new PendaftarBaru($data));
        }
    }
}
