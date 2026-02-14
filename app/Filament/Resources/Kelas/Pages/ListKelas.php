<?php

namespace App\Filament\Resources\Kelas\Pages;

use App\Filament\Resources\Kelas\KelasResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListKelas extends ListRecords
{
    protected static string $resource = KelasResource::class;
    protected static ?string $title = 'Data Kelas';
    protected static ?string $breadcrumb = 'List Data';

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
