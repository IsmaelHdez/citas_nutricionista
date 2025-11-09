<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\EnumStatus;
use App\Models\AppointmentType;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        AppointmentType::create([
            'name' => 'Consulta Seguimiento',
            'duration' => 20,
            'status' => EnumStatus::Active,
        ]);

        AppointmentType::create([
            'name' => 'Nutrición Deportiva',
            'duration' => 30,
            'status' => EnumStatus::Active,
        ]);

        AppointmentType::create([
            'name' => 'Control de Peso',
            'duration' => 30,
            'status' => EnumStatus::Active,
        ]);

        AppointmentType::create([
            'name' => 'Nutrición Clínica',
            'duration' => 45,
            'status' => EnumStatus::Active,
        ]);

        AppointmentType::create([
            'name' => 'Nutrición Infantil',
            'duration' => 30,
            'status' => EnumStatus::Active,
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        AppointmentType::whereIn('name', [
            'Consulta Seguimiento',
            'Nutrición Deportiva',
            'Control de Peso',
            'Nutrición Clínica',
            'Nutrición Infantil',
        ])->delete();
    }
};
