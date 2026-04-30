<?php

namespace App\Filament\Resources\Attendances\Schemas;

use App\Models\Jamaah;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;

class AttendanceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('jamaah_id')
                    ->relationship('jamaah', 'name')
                    ->searchable()
                    ->required()
                    ->afterStateUpdated(function (Set $set, $state) {
                        if ($state) {
                            $jamaah = Jamaah::find($state);
                            $set('rfid_code', $jamaah?->rfid);
                        }
                    })
                    ->live(),
                TextInput::make('rfid_code')
                    ->disabled()
                    ->placeholder('Will be auto-filled when Jamaah is selected'),
                Select::make('prayer_time')
                    ->options([
                        'subuh' => 'Subuh',
                        'dzuhur' => 'Dzuhur',
                        'ashar' => 'Ashar',
                        'maghrib' => 'Maghrib',
                        'isya' => 'Isya',
                    ])
                    ->nullable(),
                Select::make('event')
                    ->options([
                        'regular' => 'Regular',
                        'mentari_pagi' => 'Mentari Pagi',
                    ])
                    ->required(),
                DateTimePicker::make('scanned_at')
                    ->required(),
                Select::make('present')
                    ->options([
                        1 => 'Present',
                        0 => 'Absent',
                    ])
                    ->default(1)
                    ->required(),
                Textarea::make('note')
                    ->rows(3)
                    ->nullable(),
            ]);
    }
}
