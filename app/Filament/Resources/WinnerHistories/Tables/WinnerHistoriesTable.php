<?php

namespace App\Filament\Resources\WinnerHistories\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class WinnerHistoriesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('jamaah.name')
                    ->label('Jamaah')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('prize')
                    ->sortable(),
                TextColumn::make('drawn_at')
                    ->dateTime('d M Y H:i')
                    ->sortable(),
                TextColumn::make('notes')->limit(30),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
