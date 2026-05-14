<?php

namespace App\Filament\Resources\SubLayanans\Schemas;

use App\Models\Layanan;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SubLayananForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Sub Layanan')
                    ->description('Detail sub layanan')
                    ->schema([
                        Select::make('layanan_id')
                            ->label('Layanan')
                            ->options(Layanan::all()->pluck('nama_layanan', 'id'))
                            ->searchable()
                            ->required(),
                        TextInput::make('nama_sublayanan')
                            ->label('Nama Sub Layanan')
                            ->required()
                            ->maxLength(255),
                        Textarea::make('deskripsi_sublayanan')
                            ->label('Deskripsi Sub Layanan')
                            ->required()
                            ->columnSpanFull(),
                        FileUpload::make('gambar_sublayanan')
                            ->label('Gambar Sub Layanan')
                            ->disk('public')
                            ->visibility('public')
                            ->directory('sublayanan-images')
                            ->image()
                            ->maxSize(2048)
                            ->optimize('webp', 80)
                            ->resize(50),
                        RichEditor::make('overview')
                            ->label('Overview')
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
