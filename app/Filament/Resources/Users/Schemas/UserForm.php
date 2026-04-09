<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Schemas\Components\Section;
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
                    ->description('Data dasar user dan login')
                    ->schema([
                        TextInput::make('name')
                            ->label('Nama Lengkap')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('email')
                            ->label('Email')
                            ->email()
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true),
                    ]),
                Section::make('Akses dan Keamanan')
                    ->description('Role dan password user')
                    ->schema([
                        Select::make('roles')
                            ->label('Role')
                            ->relationship('roles', 'name')
                            ->required()
                            ->preload()
                            ->searchable(),
                        TextInput::make('password')
                            ->label('Password')
                            ->password()
                            ->required(fn (string $operation): bool => $operation === 'create')
                            ->maxLength(255),
                    ]),
                Section::make('Verifikasi Email')
                    ->description('Tanggal verifikasi email user')
                    ->schema([
                        DateTimePicker::make('email_verified_at')
                            ->label('Tanggal Verifikasi Email')
                            ->nullable(),
                    ]),
            ]);
    }
}
