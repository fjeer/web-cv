<?php

namespace App\Filament\Resources\Daftars\Schemas;

use App\Models\Event;
use App\Models\Training;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;

class DaftarForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Pendaftar')
                    ->description('Detail pendaftar dan kontak')
                    ->schema([
                        TextInput::make('no_daftar')
                            ->label('No. Daftar')
                            ->columnSpanFull()
                            ->disabled(),
                        TextInput::make('name')
                            ->label('Nama Lengkap')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('email')
                            ->label('Email')
                            ->email()
                            ->required()
                            ->maxLength(255),
                        TextInput::make('phone')
                            ->label('No. Telepon / WhatsApp')
                            ->tel()
                            ->required(),
                        Select::make('gender')
                            ->label('Jenis Kelamin')
                            ->options([
                                'Laki-laki' => 'Laki-laki',
                                'Perempuan'  => 'Perempuan',
                            ])
                            ->required(),
                    ]),

                Section::make('Alamat')
                    ->description('Data alamat pendaftar berdasarkan wilayah Indonesia')
                    ->schema([

                        // Baris 1: Provinsi & Kab/Kota
                        Grid::make(2)->schema([
                            Select::make('provinsi')
                                ->label('Provinsi')
                                ->required()
                                ->searchable()
                                ->live()
                                ->options(function () {
                                    try {
                                        $data = json_decode(
                                            file_get_contents('https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json'),
                                            true
                                        );
                                        return collect($data)->pluck('name', 'name')->toArray();
                                    } catch (\Exception $e) {
                                        return [];
                                    }
                                })
                                ->afterStateUpdated(function (Set $set) {
                                    $set('kabkota', null);
                                    $set('kecamatan', null);
                                    $set('desa', null);
                                })
                                ->placeholder('-- Pilih Provinsi --'),

                            Select::make('kabkota')
                                ->label('Kabupaten / Kota')
                                ->required()
                                ->searchable()
                                ->live()
                                ->options(function (Get $get) {
                                    $provinsi = $get('provinsi');
                                    if (!$provinsi) return [];
                                    try {
                                        $provinces = json_decode(
                                            file_get_contents('https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json'),
                                            true
                                        );
                                        $provId = collect($provinces)->firstWhere('name', $provinsi)['id'] ?? null;
                                        if (!$provId) return [];
                                        $data = json_decode(
                                            file_get_contents("https://www.emsifa.com/api-wilayah-indonesia/api/regencies/{$provId}.json"),
                                            true
                                        );
                                        return collect($data)->pluck('name', 'name')->toArray();
                                    } catch (\Exception $e) {
                                        return [];
                                    }
                                })
                                ->afterStateUpdated(function (Set $set) {
                                    $set('kecamatan', null);
                                    $set('desa', null);
                                })
                                ->placeholder('-- Pilih Kab/Kota --')
                                ->disabled(fn (Get $get) => !$get('provinsi')),
                        ]),

                        // Baris 2: Kecamatan & Desa
                        Grid::make(2)->schema([
                            Select::make('kecamatan')
                                ->label('Kecamatan')
                                ->required()
                                ->searchable()
                                ->live()
                                ->options(function (Get $get) {
                                    $provinsi = $get('provinsi');
                                    $kabkota  = $get('kabkota');
                                    if (!$provinsi || !$kabkota) return [];
                                    try {
                                        $provinces = json_decode(
                                            file_get_contents('https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json'),
                                            true
                                        );
                                        $provId = collect($provinces)->firstWhere('name', $provinsi)['id'] ?? null;
                                        if (!$provId) return [];

                                        $regencies = json_decode(
                                            file_get_contents("https://www.emsifa.com/api-wilayah-indonesia/api/regencies/{$provId}.json"),
                                            true
                                        );
                                        $kabId = collect($regencies)->firstWhere('name', $kabkota)['id'] ?? null;
                                        if (!$kabId) return [];

                                        $data = json_decode(
                                            file_get_contents("https://www.emsifa.com/api-wilayah-indonesia/api/districts/{$kabId}.json"),
                                            true
                                        );
                                        return collect($data)->pluck('name', 'name')->toArray();
                                    } catch (\Exception $e) {
                                        return [];
                                    }
                                })
                                ->afterStateUpdated(fn (Set $set) => $set('desa', null))
                                ->placeholder('-- Pilih Kecamatan --')
                                ->disabled(fn (Get $get) => !$get('kabkota')),

                            Select::make('desa')
                                ->label('Desa / Kelurahan')
                                ->required()
                                ->searchable()
                                ->live()
                                ->options(function (Get $get) {
                                    $provinsi  = $get('provinsi');
                                    $kabkota   = $get('kabkota');
                                    $kecamatan = $get('kecamatan');
                                    if (!$provinsi || !$kabkota || !$kecamatan) return [];
                                    try {
                                        $provinces = json_decode(
                                            file_get_contents('https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json'),
                                            true
                                        );
                                        $provId = collect($provinces)->firstWhere('name', $provinsi)['id'] ?? null;
                                        if (!$provId) return [];

                                        $regencies = json_decode(
                                            file_get_contents("https://www.emsifa.com/api-wilayah-indonesia/api/regencies/{$provId}.json"),
                                            true
                                        );
                                        $kabId = collect($regencies)->firstWhere('name', $kabkota)['id'] ?? null;
                                        if (!$kabId) return [];

                                        $districts = json_decode(
                                            file_get_contents("https://www.emsifa.com/api-wilayah-indonesia/api/districts/{$kabId}.json"),
                                            true
                                        );
                                        $kecId = collect($districts)->firstWhere('name', $kecamatan)['id'] ?? null;
                                        if (!$kecId) return [];

                                        $data = json_decode(
                                            file_get_contents("https://www.emsifa.com/api-wilayah-indonesia/api/villages/{$kecId}.json"),
                                            true
                                        );
                                        return collect($data)->pluck('name', 'name')->toArray();
                                    } catch (\Exception $e) {
                                        return [];
                                    }
                                })
                                ->placeholder('-- Pilih Desa/Kelurahan --')
                                ->disabled(fn (Get $get) => !$get('kecamatan')),
                        ]),

                        // Baris 3: Detail Alamat & Kode Pos
                        Grid::make(4)->schema([
                            TextInput::make('alamat_detail')
                                ->label('Detail Alamat (Jalan, RT/RW, Dusun)')
                                ->placeholder('Contoh: Jl. Merdeka No.12, RT 002/RW 005')
                                ->required()
                                ->maxLength(500)
                                ->columnSpan(3),
                            TextInput::make('kodepos')
                                ->label('Kode Pos')
                                ->placeholder('Contoh: 53171')
                                ->maxLength(10)
                                ->numeric()
                                ->columnSpan(1),
                        ]),

                        // Kolom address lama — readonly, hanya info
                        Textarea::make('address')
                            ->label('Alamat Lengkap (Otomatis)')
                            ->disabled()
                            ->dehydrated(false)
                            ->columnSpanFull()
                            ->helperText('Terisi otomatis dari data wilayah di atas saat disimpan.')
                            ->visible(fn (Get $get) => (bool) $get('address')),
                    ]),

                Section::make('Pilihan Pendaftar')
                    ->description('Kursus atau event yang dipilih')
                    ->schema([
                        Select::make('training_id')
                            ->label('Kursus')
                            ->options(Training::with('kursus')->where('status', 1)->get()->pluck('kursus.nama_kursus', 'id'))
                            ->searchable(),
                        Select::make('event_id')
                            ->label('Event')
                            ->options(Event::where('status_event', 1)->pluck('title', 'id'))
                            ->searchable(),
                    ]),
            ]);
    }
}
