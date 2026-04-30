<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jamaah_id')->constrained()->cascadeOnDelete();
            $table->string('rfid_code')->nullable();
            $table->enum('prayer_time', ['subuh', 'dzuhur', 'ashar', 'maghrib', 'isya'])->nullable();
            $table->timestamp('scanned_at')->useCurrent();
            $table->text('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};
