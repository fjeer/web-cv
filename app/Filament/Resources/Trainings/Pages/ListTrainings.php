<?php

namespace App\Filament\Resources\Trainings\Pages;

use App\Filament\Resources\Trainings\TrainingResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTrainings extends ListRecords
{
    protected static string $resource = TrainingResource::class;
    protected static ?string $title = 'Jadwal Kursus';
    protected static ?string $breadcrumb = 'List Jadwal';
    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
