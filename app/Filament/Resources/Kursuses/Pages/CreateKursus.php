<?php

namespace App\Filament\Resources\Kursuses\Pages;

use App\Filament\Resources\Kursuses\KursusResource;
use Filament\Resources\Pages\CreateRecord;

class CreateKursus extends CreateRecord
{
    protected static string $resource = KursusResource::class;
    protected static ?string $title = 'Tambah Data Kursus';
    protected static ?string $breadcrumb = 'Tambah Data';
    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
