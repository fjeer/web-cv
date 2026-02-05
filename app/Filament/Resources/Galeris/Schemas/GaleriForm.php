<?php

namespace App\Filament\Resources\Galeris\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class GaleriForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_galeri')
                    ->required(),
                Textarea::make('deskripsi_galeri')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('foto_galeri')
                    ->disk('public')
                    ->visibility('public')
                    ->directory('galeri-images')
                    ->required(),
            ]);
    }
}
