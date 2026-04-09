<?php

namespace App\Filament\Resources\Daftars\Schemas;

use App\Models\Event;
use App\Models\Training;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class DaftarForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Pendaftar')
                    ->description('Detail pendaftar dan kontak')
                    ->schema([
                        TextInput::make('no_daftar')
                            ->label('No. Daftar')
                            ->columnSpanFull()
                            ->disabled(),
                        TextInput::make('name')
                            ->label('Nama Lengkap')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('email')
                            ->label('Email')
                            ->email()
                            ->required()
                            ->maxLength(255),
                        TextInput::make('phone')
                            ->label('No. Telepon')
                            ->tel()
                            ->required(),
                        Select::make('gender')
                            ->label('Jenis Kelamin')
                            ->options([
                                'Laki-laki' => 'Laki-laki',
                                'Perempuan' => 'Perempuan',
                            ])
                            ->required(),
                        Textarea::make('address')
                            ->label('Alamat')
                            ->required()
                            ->columnSpanFull(),
                    ]),
                Section::make('Pilihan Pendaftar')
                    ->description('Kursus atau event yang dipilih')
                    ->schema([
                        Select::make('training_id')
                            ->label('Kursus')
                            ->options(Training::with('kursus')->where('status', 1)->get()->pluck('kursus.nama_kursus', 'id'))
                            ->searchable(),
                        Select::make('event_id')
                            ->label('Event')
                            ->options(Event::where('status_event', 1)->pluck('title', 'id'))
                            ->searchable(),
                    ]),
            ]);
    }
}
