<?php

namespace App\Filament\Resources\Beritas\Schemas;

use App\Models\User;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class BeritaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Berita')
                    ->description('Detail berita dan konten')
                    ->schema([
                        TextInput::make('title')
                            ->label('Judul Berita')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('slug')
                            ->label('Slug')
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true),
                        RichEditor::make('detail_berita')
                            ->label('Konten Berita')
                            ->required()
                            ->columnSpanFull(),
                    ]),
                Section::make('Media dan Metadata')
                    ->description('Gambar dan informasi tambahan')
                    ->schema([
                        FileUpload::make('gambar_berita')
                            ->label('Gambar Berita')
                            ->disk('public')
                            ->visibility('public')
                            ->directory('berita-images')
                            ->image()
                            ->maxSize(5120)
                            ->required(),
                        DatePicker::make('tanggal_berita')
                            ->label('Tanggal Publikasi')
                            ->required(),
                    ]),
                Section::make('Author')
                    ->description('Penulis berita')
                    ->schema([
                        Select::make('id_author')
                            ->label('Author')
                            ->relationship('author', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),
                    ]),
            ]);
    }
}
