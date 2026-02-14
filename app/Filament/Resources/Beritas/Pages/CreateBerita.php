<?php

namespace App\Filament\Resources\Beritas\Pages;

use App\Filament\Resources\Beritas\BeritaResource;
use Filament\Resources\Pages\CreateRecord;

class CreateBerita extends CreateRecord
{
    protected static string $resource = BeritaResource::class;
    protected static ?string $title = 'Tambah Data Berita';
    protected static ?string $breadcrumb = 'Tambah Data';
    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
