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
        Schema::create('t_penalidads', function (Blueprint $table) {
            $table->id();
            $table->string('Direccion');
            $table->string('Distrito');
            $table->string('Referencia');
            $table->string('Actividad');
            $table->string('Ocurrencia');
            $table->string('Item_Penalidad');
            $table->string('Nombre_Penalidad');
            $table->string('Obs');
            $table->string('Nom_Sup_Pe');
            $table->string('Ape_Sup_Pe');
            $table->string('DNI_Sup_pe');
            $table->string('Correo_sup_pe');
            $table->string('Celular_Sup_pe');
            $table->string('Obs_Penalidad');
            $table->string('Comentarios');
            $table->string('Fecha');
            $table->string('Hora');
            $table->string('Status');
            $table->string('usu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_penalidads');

    }
};
