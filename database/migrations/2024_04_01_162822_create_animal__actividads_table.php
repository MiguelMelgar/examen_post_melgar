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
        Schema::create('animal__actividads', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('id_actividad')
                  ->nullable()
                  ->constrained('actividads')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
            $table->foreignId('id_animal')
                  ->nullable()
                  ->constrained('animals')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animal__actividads');
    }
};
