<?php

namespace App\Filament\Resources\Kursuses\Pages;

use App\Filament\Resources\Kursuses\KursusResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Resources\Pages\EditRecord;

class EditKursus extends EditRecord
{
    protected static string $resource = KursusResource::class;
    protected static ?string $title = 'Edit Data Kursus';
    protected static ?string $breadcrumb = 'Edit Data';

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
