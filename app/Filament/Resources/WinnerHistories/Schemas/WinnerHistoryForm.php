<?php

namespace App\Filament\Resources\WinnerHistories\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class WinnerHistoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('jamaah_id')
                    ->relationship('jamaah', 'name')
                    ->searchable()
                    ->required(),
                TextInput::make('prize')
                    ->required(),
                TextInput::make('rfid_code')
                    ->nullable(),
                DateTimePicker::make('drawn_at')
                    ->required(),
                Textarea::make('notes')
                    ->rows(3)
                    ->nullable(),
            ]);
    }
}
