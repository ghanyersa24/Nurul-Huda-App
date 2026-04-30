<?php

namespace App\Filament\Resources\WinnerHistories\Pages;

use App\Filament\Resources\WinnerHistories\WinnerHistoryResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditWinnerHistory extends EditRecord
{
    protected static string $resource = WinnerHistoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
