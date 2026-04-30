<?php

namespace App\Models;

use Database\Factories\WinnerHistoryFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['jamaah_id', 'prize', 'rfid_code', 'drawn_at', 'notes'])]
class WinnerHistory extends Model
{
    /** @use HasFactory<WinnerHistoryFactory> */
    use HasFactory;

    protected function casts(): array
    {
        return [
            'drawn_at' => 'datetime',
        ];
    }

    public function jamaah(): BelongsTo
    {
        return $this->belongsTo(Jamaah::class);
    }
}
