<?php

namespace App\Filament\Resources\Events\Schemas;

use App\Models\Kategori;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class EventForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                RichEditor::make('detail_event')
                    ->columnSpanFull()
                    ->required(),
                Select::make('id_kategori')
                    ->label('Kategori Event')
                    ->options(Kategori::all()->pluck('nama_kategori', 'id'))
                    ->searchable()
                    ->required(),
                FileUpload::make('gambar_event')
                    ->disk('public')
                    ->visibility('public')
                    ->directory('event-images')
                    ->image()
                    ->required(),
                TextInput::make('lokasi')
                    ->required(),
                TextInput::make('kuota')
                    ->required()
                    ->numeric(),
                DatePicker::make('tanggal_event')
                    ->required(),
                Toggle::make('status_event')
                    ->required(),
            ]);
    }
}
