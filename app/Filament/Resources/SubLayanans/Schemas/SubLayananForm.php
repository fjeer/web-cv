<?php

namespace App\Filament\Resources\SubLayanans\Schemas;

use App\Models\Layanan;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
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
                Select::make('layanan_id')
                    ->label('Layanan')
                    ->options(Layanan::all()->pluck('nama_layanan','id'))
                    ->searchable()
                    ->required(),
                TextInput::make('nama_sublayanan')
                    ->label('Sub Layanan')
                    ->required(),
                Textarea::make('deskripsi_sublayanan')
                    ->label('Deskripsi')
                    ->required(),
                FileUpload::make('gambar_sublayanan')
                    ->label('Gambar')
                    ->disk('public')
                    ->visibility('public')
                    ->directory('sublayanan-images'),
                RichEditor::make('overview')
                    ->label('Overview')
                    ->columnSpanFull(),
            ]);
    }
}
