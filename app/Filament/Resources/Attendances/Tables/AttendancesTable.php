<?php

namespace App\Filament\Resources\Attendances\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class AttendancesTable
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
                TextColumn::make('prayer_time')
                    ->sortable(),
                TextColumn::make('event')
                    ->badge()
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'regular' => 'Regular',
                        'mentari_pagi' => 'Mentari Pagi',
                        default => $state,
                    })
                    ->color(fn (string $state): string => match ($state) {
                        'regular' => 'primary',
                        'mentari_pagi' => 'success',
                        default => 'gray',
                    })
                    ->sortable(),
                TextColumn::make('scanned_at')
                    ->dateTime('d M Y H:i')
                    ->sortable(),
                BooleanColumn::make('present'),
                TextColumn::make('note')->limit(30),
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
