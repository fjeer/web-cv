<?php

namespace App\Filament\Resources\Daftars\Pages;

use App\Filament\Resources\Daftars\DaftarResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDaftars extends ListRecords
{
    protected static string $resource = DaftarResource::class;
    protected static ?string $title = 'Data Pendaftaran';
    protected static ?string $breadcrumb = 'List Data';

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
