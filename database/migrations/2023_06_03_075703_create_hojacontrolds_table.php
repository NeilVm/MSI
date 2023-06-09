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
        Schema::create('hojacontrolds', function (Blueprint $table) {
            $table->id();
            $table->string('tierra_papeles');
            $table->string('embolsado_residuos');
            $table->string('nivel_ejecucion');
            $table->string('uso_apro_uni');
            $table->string('uniforme');
            $table->string('herramientas');
            $table->string('personal_comp');
            $table->string('personal_iden');
            $table->string('epp');
            $table->string('cobertura_ser');
            $table->string('usu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hojacontrolds');
    }
};
