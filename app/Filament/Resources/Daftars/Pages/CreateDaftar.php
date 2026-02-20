<?php

namespace App\Filament\Resources\Daftars\Pages;

use App\Filament\Resources\Daftars\DaftarResource;
use Filament\Resources\Pages\CreateRecord;

class CreateDaftar extends CreateRecord
{
    protected static string $resource = DaftarResource::class;
    protected static ?string $title = 'Tambah Data Pendaftaran';
    protected static ?string $breadcrumb = 'Tambah Data';
    public function getRedirectUrl(): string
    {        
        return $this->getResource()::getUrl('index');
    }
}
