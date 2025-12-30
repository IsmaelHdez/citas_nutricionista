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
        Schema::table('appointment', function (Blueprint $table) {
            $table->enum('status', ['active', 'cancelled'])->default('active')->change();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('appointment', function (Blueprint $table) {
            // Revertir cambios en la columna 'status'
            $table->string('status')->default('scheduled')->change();
        });
    }
};
