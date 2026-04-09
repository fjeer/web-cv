<?php

namespace App\Filament\Resources\Events\Schemas;

use App\Models\Kategori;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class EventForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Event')
                    ->description('Detail utama event')
                    ->schema([
                        TextInput::make('title')
                            ->label('Judul Event')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('slug')
                            ->label('Slug')
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true),
                        RichEditor::make('detail_event')
                            ->label('Detail Event')
                            ->columnSpanFull()
                            ->required(),
                    ]),
                Section::make('Pengaturan Event')
                    ->description('Tanggal, lokasi, dan kuota')
                    ->schema([
                        Select::make('id_kategori')
                            ->label('Kategori Event')
                            ->options(Kategori::all()->pluck('nama_kategori', 'id'))
                            ->searchable()
                            ->required(),
                        TextInput::make('lokasi')
                            ->label('Lokasi')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('kuota')
                            ->label('Kuota')
                            ->numeric()
                            ->required(),
                        DatePicker::make('tanggal_event')
                            ->label('Tanggal Event')
                            ->required(),
                        Toggle::make('status_event')
                            ->label('Status Event')
                            ->required(),
                    ]),
                Section::make('Media')
                    ->description('Gambar event')
                    ->schema([
                        FileUpload::make('gambar_event')
                            ->label('Gambar Event')
                            ->disk('public')
                            ->visibility('public')
                            ->directory('event-images')
                            ->image()
                            ->maxSize(5120)
                            ->required(),
                    ]),
            ]);
    }
}
