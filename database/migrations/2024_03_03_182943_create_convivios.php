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
        Schema::create('convivios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('participacion');
            $table->string('maestro');
            $table->integer('horas_solicitadas');
            $table->string('comida');
            $table->date('dia');
            $table->time('hora');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('convivios');
    }
};
