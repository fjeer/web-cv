<?php

namespace App\Filament\Resources\Beritas\Pages;

use App\Filament\Resources\Beritas\BeritaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListBeritas extends ListRecords
{
    protected static string $resource = BeritaResource::class;
    protected static ?string $title = 'Data Berita';
    protected static ?string $breadcrumb = 'List Data';

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
