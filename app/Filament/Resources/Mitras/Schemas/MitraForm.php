<?php

namespace App\Filament\Resources\Mitras\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class MitraForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Mitra')
                    ->description('Detail mitra dan kontak')
                    ->schema([
                        TextInput::make('nama_mitra')
                            ->label('Nama Mitra')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('email_mitra')
                            ->label('Email Mitra')
                            ->email()
                            ->required()
                            ->maxLength(255),
                        TextInput::make('no_telp_mitra')
                            ->label('Nomor Telepon Mitra')
                            ->tel()
                            ->required()
                            ->maxLength(20),
                        FileUpload::make('logo_mitra')
                            ->label('Logo Mitra')
                            ->disk('public')
                            ->visibility('public')
                            ->directory('mitra-images')
                            ->image()
                            ->maxSize(2048)
                            ->optimize('webp', 90)
                            ->resize(50)
                            ->required(),
                    ]),
            ]);
    }
}
