<?php

namespace App\Filament\Resources\Layanans\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class LayananForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_layanan')
                    ->required(),
                Textarea::make('deskripsi_layanan')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
