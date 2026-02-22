<?php

namespace App\Filament\Resources\SubLayanans\Pages;

use App\Filament\Resources\SubLayanans\SubLayananResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSubLayanans extends ListRecords
{
    protected static string $resource = SubLayananResource::class;
    protected static ?string $title = 'Data Sub-layanan';
    protected static ?string $breadcrumb = 'List Data';

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
