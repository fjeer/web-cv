<?php

namespace App\Filament\Resources\SubLayanans;

use App\Filament\Resources\SubLayanans\Pages\CreateSubLayanan;
use App\Filament\Resources\SubLayanans\Pages\EditSubLayanan;
use App\Filament\Resources\SubLayanans\Pages\ListSubLayanans;
use App\Filament\Resources\SubLayanans\Schemas\SubLayananForm;
use App\Filament\Resources\SubLayanans\Tables\SubLayanansTable;
use App\Models\SubLayanan;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SubLayananResource extends Resource
{
    protected static ?string $model = SubLayanan::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Briefcase;
    protected static ?string $pluralModelLabel = 'Data Sub-layanan';
    protected static ?string $slug = 'sub-layanan-data';
    public static function getNavigationGroup(): ?string
    {
        return 'Portofolio Management';
    }
    public static function form(Schema $schema): Schema
    {
        return SubLayananForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SubLayanansTable::configure($table);
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
            'index' => ListSubLayanans::route('/'),
            'create' => CreateSubLayanan::route('/create'),
            'edit' => EditSubLayanan::route('/{record}/edit'),
        ];
    }
}
