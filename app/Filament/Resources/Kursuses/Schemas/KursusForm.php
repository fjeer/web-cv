<?php

namespace App\Filament\Resources\Kursuses\Schemas;

use App\Models\Kelas;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class KursusForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_kursus')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                Textarea::make('deskripsi_kursus')
                    ->required()
                    ->columnSpanFull(),
                RichEditor::make('detail_kursus')
                    ->required()
                    ->columnSpanFull(),
                Select::make('id_kelas')
                    ->label('Kelas')
                    ->options(Kelas::query()->pluck('nama_kelas', 'id')),
                TextInput::make('harga_kursus')
                    ->required()
                    ->numeric(),
                TextInput::make('rating_kursus')
                    ->required()
                    ->numeric()
                    ->default(0.0),
                FileUpload::make('gambar_kursus')
                    ->label('Gambar Kursus')
                    ->image()
                    ->disk('public')
                    ->directory('kursus-images')
                    ->visibility('public')
                    ->required(),
            ]);
    }
}
