<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\EnumStatus;
use App\Models\Schedules;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schedules::create([
            'name' => 'Horario de Verano',
            'start' => '2025-06-01',
            'end' => '2025-09-30',
            'status' => EnumStatus::Cancelled,
        ]);
        
        Schedules::create([
            'name' => 'Horario de Invierno',
            'start' => '2025-10-01',
            'end' => '2025-03-31',
            'status' => EnumStatus::Active,
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schedules::whereIn('name', [
            'Horario de Verano',
            'Horario de Invierno',
        ])->delete();
    }
};
