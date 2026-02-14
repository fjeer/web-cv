<?php

namespace App\Filament\Resources\Galeris\Pages;

use App\Filament\Resources\Galeris\GaleriResource;
use Filament\Resources\Pages\CreateRecord;

class CreateGaleri extends CreateRecord
{
    protected static string $resource = GaleriResource::class;
    protected static ?string $title = 'Tambah Data Galeri';
    protected static ?string $breadcrumb = 'Tambah Data';
    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
