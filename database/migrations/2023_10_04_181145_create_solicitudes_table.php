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
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->id('solicitud_id');
            $table->string('solicitud_email');
            $table->string('fecha_llegada');
            $table->string('hora_llegada');
            $table->string('potencia_requerida'); 
            $table->string('voltaje_requerido');
            $table->string('direccion_exacta');
            $table->string('referencias');
            $table->string('metraje_cableado');
            $table->string('nombre_contacto_lds');
            $table->string('celular_contacto_lds');
            $table->string('observaciones');
            $table->string('estado_solicitud');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitudes');
    }
};
