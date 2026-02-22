<?php

namespace App\Filament\Resources\SubLayanans\Pages;

use App\Filament\Resources\SubLayanans\SubLayananResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSubLayanan extends EditRecord
{
    protected static string $resource = SubLayananResource::class;
    protected static ?string $title = 'Edit Sub-layanan';
    protected static ?string $breadcrumb = 'Edit Data';

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
