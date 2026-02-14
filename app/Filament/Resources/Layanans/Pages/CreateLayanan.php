<?php

namespace App\Filament\Resources\Layanans\Pages;

use App\Filament\Resources\Layanans\LayananResource;
use Filament\Resources\Pages\CreateRecord;

class CreateLayanan extends CreateRecord
{
    protected static string $resource = LayananResource::class;
    protected static ?string $title = 'Tambah Data Layanan';
    protected static ?string $breadcrumb = 'Tambah Data';
    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
