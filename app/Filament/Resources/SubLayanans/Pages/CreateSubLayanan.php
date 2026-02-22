<?php

namespace App\Filament\Resources\SubLayanans\Pages;

use App\Filament\Resources\SubLayanans\SubLayananResource;
use Filament\Resources\Pages\CreateRecord;

class CreateSubLayanan extends CreateRecord
{
    protected static string $resource = SubLayananResource::class;
    protected static ?string $title = 'Tamabah Sub-layanan';
    protected static ?string $breadcrumb = 'Tambah Data';
    
    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
