<?php

namespace App\Filament\Resources\Galeris\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class GaleriForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Galeri')
                    ->description('Detail galeri')
                    ->schema([
                        TextInput::make('nama_galeri')
                            ->label('Nama Galeri')
                            ->required()
                            ->maxLength(255),
                        Textarea::make('deskripsi_galeri')
                            ->label('Deskripsi Galeri')
                            ->required()
                            ->columnSpanFull(),
                    ]),
                Section::make('Media')
                    ->description('Foto galeri')
                    ->schema([
                        FileUpload::make('foto_galeri')
                            ->label('Foto Galeri')
                            ->disk('public')
                            ->visibility('public')
                            ->directory('galeri-images')
                            ->image()
                            ->maxSize(5120)
                            ->required(),
                    ]),
            ]);
    }
}
