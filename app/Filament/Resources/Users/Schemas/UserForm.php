<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Akun')
                    ->description('Detail akun user')
                    ->schema([
                        TextInput::make('name')
                            ->label('Nama Lengkap')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('email')
                            ->label('Email Address')
                            ->email()
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true),
                    ]),
                Section::make('Keamanan dan Akses')
                    ->description('Password dan permissions')
                    ->schema([
                        TextInput::make('password')
                            ->label('Password')
                            ->password()
                            ->required(fn (string $operation): bool => $operation === 'create')
                            ->maxLength(255),
                        Select::make('roles')
                            ->label('Role')
                            ->relationship('roles', 'name')
                            ->required()
                            ->preload()
                            ->searchable(),
                    ]),
                Section::make('Verifikasi Email')
                    ->description('Status verifikasi email')
                    ->schema([
                        DateTimePicker::make('email_verified_at')
                            ->label('Email Verified At')
                            ->nullable(),
                    ]),
            ]);
    }
}
