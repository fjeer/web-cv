<?php

namespace App\Filament\Resources\Daftars\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Schemas\Components\View;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class DaftarsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('no_daftar')
                    ->searchable(),
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('phone')
                    ->label('No. WhatsApp')
                    ->searchable(),
                TextColumn::make('gender')
                    ->searchable(),
                TextColumn::make('training.kursus.nama_kursus')
                    ->label('Kursus')
                    ->searchable(),                   
                TextColumn::make('event.title')
                    ->label('Event')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
