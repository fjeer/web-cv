<?php

namespace App\Filament\Resources\Events\Pages;

use App\Filament\Resources\Events\EventResource;
use Filament\Resources\Pages\CreateRecord;

class CreateEvent extends CreateRecord
{
    protected static string $resource = EventResource::class;
    protected static ?string $title = 'Tambah Data Event';
    protected static ?string $breadcrumb = 'Tambah Data';
    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
