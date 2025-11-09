<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\NonWorkableDay;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        NonWorkableDay::create([
            'year' => '2025',
            'date' => '2025-11-01',
        ]);

        NonWorkableDay::create([
            'year' => '2025',
            'date' => '2025-12-06',
        ]);

        NonWorkableDay::create([
            'year' => '2025',
            'date' => '2025-12-08',
        ]);

        NonWorkableDay::create([
            'year' => '2025',
            'date' => '2025-12-25',
        ]);

        NonWorkableDay::create([
            'year' => '2026',
            'date' => '2026-01-01',
        ]);

        NonWorkableDay::create([
            'year' => '2026',
            'date' => '2026-01-06',
        ]);

        NonWorkableDay::create([
            'year' => '2026',
            'date' => '2026-04-02',
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
