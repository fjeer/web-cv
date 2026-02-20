<?php

namespace App\Filament\Resources\Daftars\Pages;

use App\Filament\Resources\Daftars\DaftarResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditDaftar extends EditRecord
{
    protected static string $resource = DaftarResource::class;
    protected static ?string $title = 'Edit Data Pendaftaran';
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
