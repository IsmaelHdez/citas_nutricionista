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
        Schema::rename('appointmet_type', 'appointment_type');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::rename('appointment_type', 'appointmet_type');
    }
};
