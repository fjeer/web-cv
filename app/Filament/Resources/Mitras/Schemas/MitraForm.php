<?php

namespace App\Filament\Resources\Mitras\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class MitraForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_mitra')
                    ->required(),
                FileUpload::make('logo_mitra')
                    ->disk('public')
                    ->visibility('public')
                    ->directory('mitra-images')
                    ->required(),
                TextInput::make('email_mitra')
                    ->email()
                    ->required(),
                TextInput::make('no_telp_mitra')
                    ->tel()
                    ->required(),
            ]);
    }
}
