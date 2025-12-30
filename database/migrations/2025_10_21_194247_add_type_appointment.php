<?php

use Illuminate\Database\Migrations\Migration;
use App\Enums\EnumStatus;
use App\Models\AppointmentType;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //

        DB::table('appointment_types')->insert([
            'name' => 'Consulta Seguimiento',
            'duration' => 20,
            'status' => EnumStatus::Active,
        ]);

        DB::table('appointment_types')->insert([
            'name' => 'Nutrición Deportiva',
            'duration' => 30,
            'status' => 'active',
        ]);

        DB::table('appointment_types')->insert([
            'name' => 'Control de Peso',
            'duration' => 30,
            'status' => 'active',
        ]);

        DB::table('appointment_types')->insert([
            'name' => 'Nutrición Clínica',
            'duration' => 45,
            'status' => 'active',
        ]);

        DB::table('appointment_types')->insert([
            'name' => 'Nutrición Infantil',
            'duration' => 30,
            'status' => 'active',
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
