<?php

namespace App\Filament\Resources\Kelas\Schemas;

use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class KelasForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Kelas')
                    ->description('Detail kelas dan slug untuk URL')
                    ->schema([
                        TextInput::make('nama_kelas')
                            ->label('Nama Kelas')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('slug')
                            ->label('Slug')
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true),
                    ]),
            ]);
    }
}
