<?php

namespace App\Filament\Resources\Kursuses\Schemas;

use App\Models\Kelas;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Components\Section;
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
                Section::make('Informasi Kursus')
                    ->description('Detail kursus')
                    ->schema([
                        TextInput::make('nama_kursus')
                            ->label('Nama Kursus')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('slug')
                            ->label('Slug')
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true),
                        Textarea::make('deskripsi_kursus')
                            ->label('Deskripsi Singkat')
                            ->required()
                            ->columnSpanFull(),
                        RichEditor::make('detail_kursus')
                            ->label('Detail Kursus')
                            ->required()
                            ->columnSpanFull(),
                    ]),
                Section::make('Kelas & Harga')
                    ->description('Kelas dan harga kursus')
                    ->schema([
                        Select::make('id_kelas')
                            ->label('Kelas')
                            ->options(Kelas::all()->pluck('nama_kelas', 'id'))
                            ->searchable()
                            ->required(),
                        TextInput::make('harga_kursus')
                            ->label('Harga Kursus')
                            ->numeric()
                            ->required(),
                        TextInput::make('rating_kursus')
                            ->label('Rating Kursus')
                            ->numeric()
                            ->default(0.0)
                            ->helperText('Nilai antara 0.0 hingga 5.0'),
                    ]),
                Section::make('Media')
                    ->description('Gambar kursus')
                    ->schema([
                        FileUpload::make('gambar_kursus')
                            ->label('Gambar Kursus')
                            ->directory('kursus-images')
                            ->disk('public')
                            ->visibility('public')
                            ->image()
                            ->maxSize(2048)
                            ->optimize('webp', 80)
                            ->resize(50)
                            ->required(),
                    ]),
            ]);
    }
}
