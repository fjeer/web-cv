<?php

namespace App\Filament\Resources\Kursuses;

use App\Filament\Resources\Kursuses\Pages\CreateKursus;
use App\Filament\Resources\Kursuses\Pages\EditKursus;
use App\Filament\Resources\Kursuses\Pages\ListKursuses;
use App\Filament\Resources\Kursuses\Schemas\KursusForm;
use App\Filament\Resources\Kursuses\Tables\KursusesTable;
use App\Models\Kursus;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KursusResource extends Resource
{
    protected static ?string $model = Kursus::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedBookmarkSquare;

    protected static ?string $recordTitleAttribute = 'nama_kursus';
    protected static ?string $navigationLabel = 'Data Kursus';
    protected static ?string $pluralModelLabel = 'Data Kursus';
    protected static ?string $slug = 'kursus-data';
    public static function getNavigationGroup(): ?string
    {
        return 'Courses';
    }

    public static function form(Schema $schema): Schema
    {
        return KursusForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return KursusesTable::configure($table);
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
            'index' => ListKursuses::route('/'),
            'create' => CreateKursus::route('/create'),
            'edit' => EditKursus::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
