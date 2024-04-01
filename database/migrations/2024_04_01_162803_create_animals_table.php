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
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre',50);
            $table->string('Color',50);
            $table->timestamps();
            $table->foreignId('id_cuidador')
                  ->nullable()
                  ->constrained('cuidadors')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
            $table->foreignId('id_especie')
                  ->nullable()
                  ->constrained('especies')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animals');
    }
};
