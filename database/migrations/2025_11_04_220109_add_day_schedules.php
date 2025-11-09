<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\DaySchedules;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        DaySchedules::create([
            'schedule_id' => 1,
            'weekday' => '1',
            'start' => '09:00:00',
            'end' => '14:00:00',
        ]);

        DaySchedules::create([
            'schedule_id' => 1,
            'weekday' => '2',
            'start' => '09:00:00',
            'end' => '14:00:00',
        ]);

        DaySchedules::create([
            'schedule_id' => 1,
            'weekday' => '3',
            'start' => '09:00:00',
            'end' => '14:00:00',
        ]);

        DaySchedules::create([
            'schedule_id' => 1,
            'weekday' => '4',
            'start' => '09:00:00',
            'end' => '14:00:00',
        ]);

        DaySchedules::create([
            'schedule_id' => 1,
            'weekday' => '5',
            'start' => '09:00:00',
            'end' => '14:00:00',
        ]);

        DaySchedules::create([
            'schedule_id' => 2,
            'weekday' => '1',
            'start' => '08:00:00',
            'end' => '18:00:00',
        ]);

        DaySchedules::create([
            'schedule_id' => 2,
            'weekday' => '2',
            'start' => '08:00:00',
            'end' => '18:00:00',
        ]);

        DaySchedules::create([
            'schedule_id' => 2,
            'weekday' => '3',
            'start' => '08:00:00',
            'end' => '18:00:00',
        ]);

        DaySchedules::create([
            'schedule_id' => 2,
            'weekday' => '4',
            'start' => '08:00:00',
            'end' => '18:00:00',
        ]);

        DaySchedules::create([
            'schedule_id' => 2,
            'weekday' => '5',
            'start' => '08:00:00',
            'end' => '18:00:00',
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        DaySchedules::whereIn('schedule_id', [1, 2])->delete();
    }
};
