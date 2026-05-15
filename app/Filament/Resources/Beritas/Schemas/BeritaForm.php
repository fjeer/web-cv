<?php

namespace App\Filament\Resources\Beritas\Schemas;

use App\Support\WebpUploadHelper;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class BeritaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Berita')
                    ->description('Detail utama berita')
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
                            ->fileAttachmentsDisk('public')
                            ->fileAttachmentsVisibility('public')
                            ->fileAttachmentsDirectory('berita-attachments')
                            ->saveUploadedFileAttachmentUsing(
                                fn (TemporaryUploadedFile $file): string => WebpUploadHelper::saveAsWebp(
                                    file: $file,
                                    directory: 'berita-attachments',
                                    quality: 85,
                                ),
                            )
                            ->getFileAttachmentUrlUsing(
                                fn (string $file): string => asset('storage/' . $file),
                            )
                            ->required()
                            ->columnSpanFull(),
                    ]),
                Section::make('Media dan Publikasi')
                    ->description('Pengaturan gambar dan tanggal')
                    ->schema([
                        FileUpload::make('gambar_berita')
                            ->label('Gambar Berita')
                            ->disk('public')
                            ->visibility('public')
                            ->directory('berita-images')
                            ->image()
                            ->maxSize(2048)
                            ->optimize('webp', 90)
                            ->resize(50)
                            ->required(),
                        DatePicker::make('tanggal_berita')
                            ->label('Tanggal Publikasi')
                            ->required(),
                    ]),
                Section::make('Penulis')
                    ->description('Author berita')
                    ->schema([
                        Select::make('id_author')
                            ->label('Author')
                            ->relationship('user', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),
                    ]),
            ]);
    }
}
