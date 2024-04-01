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
        Schema::create('animal__recintos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('id_animal')
                  ->nullable()
                  ->constrained('animals')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
            $table->foreignId('id_recinto')
                  ->nullable()
                  ->constrained('recintos')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animal__recintos');
    }
};
