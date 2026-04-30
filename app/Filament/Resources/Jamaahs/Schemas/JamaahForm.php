<?php

namespace App\Filament\Resources\Jamaahs\Schemas;

use App\Models\Jamaah;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class JamaahForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('rfid')
                    ->required()
                    ->unique(Jamaah::class, 'rfid', ignoreRecord: true),
                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->email()
                    ->nullable(),
                TextInput::make('phone')
                    ->nullable(),
                DatePicker::make('birth_date')
                    ->nullable(),
                Textarea::make('address')
                    ->rows(3)
                    ->nullable(),
            ]);
    }
}
