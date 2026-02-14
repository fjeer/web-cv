<?php

namespace App\Filament\Resources\Kategoris\Pages;

use App\Filament\Resources\Kategoris\KategoriResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListKategoris extends ListRecords
{
    protected static string $resource = KategoriResource::class;
    protected static ?string $title = 'Data Kategori';
    protected static ?string $breadcrumb = 'List Data';

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
