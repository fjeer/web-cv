<?php

namespace App\Filament\Resources\Daftars\Schemas;

use App\Models\Event;
use App\Models\Training;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class DaftarForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('no_daftar')
                    ->columnSpanFull(),
                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('phone')
                    ->tel()
                    ->required(),
                TextInput::make('gender')
                    ->required(),
                Textarea::make('address')
                    ->required()
                    ->columnSpanFull(),
                Select::make('training_id')
                    ->label('Kursus')
                    ->options(Training::with('kursus')->where('status', 1)->get()->pluck('kursus.nama_kursus', 'id')),
                Select::make('event_id')
                    ->label('Event')
                    ->options(Event::where('status_event', 1)->pluck('title', 'id')),
            ]);
    }
}
