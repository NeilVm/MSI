<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('hoja_controd', function (Blueprint $table) {
            $table->bigIncrements('id');
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
            $table->timestamps();
        });

        // Obtener información de las columnas de la tabla
        $columns = DB::select("SELECT column_name, data_type FROM information_schema.columns WHERE table_name = 'hoja_controd'");

        // Mostrar la información de las columnas
        foreach ($columns as $column) {
            echo "Columna: " . $column->column_name . ", Tipo de dato: " . $column->data_type . "\n";
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hoja_controd');
    }
};
