<?php

namespace App\Filament\Resources\Daftars;

use App\Filament\Resources\Daftars\Pages\CreateDaftar;
use App\Filament\Resources\Daftars\Pages\EditDaftar;
use App\Filament\Resources\Daftars\Pages\ListDaftars;
use App\Filament\Resources\Daftars\Schemas\DaftarForm;
use App\Filament\Resources\Daftars\Tables\DaftarsTable;
use App\Models\Daftar;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class DaftarResource extends Resource
{
    protected static ?string $model = Daftar::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Envelope;
    protected static ?string $recordTitleAttribute = 'no_daftar';
    protected static ?string $navigationLabel = 'Data Pendaftaran';
    protected static ?string $pluralModelLabel = 'Data Daftar';
    protected static ?string $slug = 'daftar-data';

    public static function form(Schema $schema): Schema
    {
        return DaftarForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DaftarsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListDaftars::route('/'),
            'create' => CreateDaftar::route('/create'),
            'edit' => EditDaftar::route('/{record}/edit'),
        ];
    }
}
