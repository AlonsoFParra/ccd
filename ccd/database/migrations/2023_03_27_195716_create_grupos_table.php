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
        Schema::create('grupos', function (Blueprint $table) {
            $table->id();
            $table->int('grado');
            $table->string('grupo');
            $table->int('turno_id');
            $table->int('maestro_id');
            $table->foreign('maestro_id')->references('id')->on('maestros');
            $table->int('maestro_eje_id');
            $table->foreign('maestro_eje_id')->references('id')->on('maestros');
            $table->int('periodo_id');
            $table->foreign('periodo_id')->references('id')->on('periodos');
            $table->int('carrera_id');
            $table->foreign('carrera_id')->references('id')->on('carreras');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grupos');
    }
};
