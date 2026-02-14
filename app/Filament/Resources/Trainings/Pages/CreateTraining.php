<?php

namespace App\Filament\Resources\Trainings\Pages;

use App\Filament\Resources\Trainings\TrainingResource;
use Filament\Resources\Pages\CreateRecord;

class CreateTraining extends CreateRecord
{
    protected static string $resource = TrainingResource::class;
    protected static ?string $title = 'Tambah Jadwal Kursus';
    protected static ?string $breadcrumb = 'Tambah Jadwal';
    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
