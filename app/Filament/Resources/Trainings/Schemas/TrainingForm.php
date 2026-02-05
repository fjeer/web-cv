<?php

namespace App\Filament\Resources\Trainings\Schemas;

use App\Models\Kursus;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class TrainingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('id_kursus')
                    ->label('Kursus')
                    ->options(Kursus::all()->pluck('nama_kursus', 'id'))
                    ->searchable()
                    ->required(),
                DatePicker::make('tanggal_mulai')
                    ->required(),
                DatePicker::make('tanggal_selesai')
                    ->required(),
                TimePicker::make('waktu')
                    ->seconds(false)
                    ->required(),
                TextInput::make('kuota')
                    ->required()
                    ->numeric(),
                Toggle::make('status')
                    ->required(),
            ]);
    }
}
