<?php

namespace App\Filament\Resources\Beritas\Schemas;

use App\Models\User;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
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
                TextInput::make('title')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                RichEditor::make('detail_berita')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('gambar_berita')
                    ->disk('public')
                    ->visibility('public')
                    ->directory('berita-images')
                    ->required(),
                Select::make('id_author')
                    ->label('Author')
                    ->options(User::all()->pluck('name', 'id'))
                    ->searchable()
                    ->required(),
                DatePicker::make('tanggal_berita')
                    ->required(),
            ]);
    }
}
