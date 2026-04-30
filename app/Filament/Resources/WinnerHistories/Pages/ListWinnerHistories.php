<?php

namespace App\Filament\Resources\WinnerHistories\Pages;

use App\Filament\Resources\WinnerHistories\WinnerHistoryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListWinnerHistories extends ListRecords
{
    protected static string $resource = WinnerHistoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
