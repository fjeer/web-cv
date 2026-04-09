<?php

namespace App\Filament\Resources\Layanans\Schemas;

use Filament\Schemas\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class LayananForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Layanan')
                    ->description('Detail layanan yang ditawarkan')
                    ->schema([
                        TextInput::make('nama_layanan')
                            ->label('Nama Layanan')
                            ->required()
                            ->maxLength(255),
                        Textarea::make('deskripsi_layanan')
                            ->label('Deskripsi Layanan')
                            ->required()
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
