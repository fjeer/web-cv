<?php

namespace App\Filament\Resources\Trainings\Schemas;

use App\Models\Kursus;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\DatePicker;
use Filament\Schemas\Schema;

class TrainingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Training')
                    ->description('Detail jadwal training')
                    ->schema([
                        Select::make('id_kursus')
                            ->label('Kursus')
                            ->options(Kursus::all()->pluck('nama_kursus', 'id'))
                            ->searchable()
                            ->required(),
                        DatePicker::make('tanggal_mulai')
                            ->label('Tanggal Mulai')
                            ->required(),
                        DatePicker::make('tanggal_selesai')
                            ->label('Tanggal Selesai')
                            ->required(),
                        TimePicker::make('waktu')
                            ->label('Waktu')
                            ->seconds(false)
                            ->required(),
                        TextInput::make('kuota')
                            ->label('Kuota')
                            ->numeric()
                            ->required(),
                        Toggle::make('status')
                            ->label('Status')
                            ->required(),
                    ]),
            ]);
    }
}
