<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('productions', function (Blueprint $table) {
            $table->text('Folio');
            $table->text('Cliente');
            $table->text('Descripcion');
            $table->text('Cm_totales');
            $table->text('Corrugado');
            $table->text('Maquina');
            $table->text('Factor_reduccion');
            $table->text('Cut');
            $table->text('Score');
            $table->text('Calado');
            $table->text('S_rotativo')->nullable();
            $table->text('S_plano')->nullable();
            $table->text('Perforado');
            $table->text('Fecha');
            $table->text('Cotizacion')->nullable();
            $table->text('Corte');
            $table->text('Doblez');
            $table->text('Medida_perforado');
            $table->text('Hule');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('productions', function (Blueprint $table) {
            $table->dropColumn('Folio');
            $table->dropColumn('Cliente');
            $table->dropColumn('Descripcion');
            $table->dropColumn('Cm_totales');
            $table->dropColumn('Corrugado');
            $table->dropColumn('Maquina');
            $table->dropColumn('Factor_reduccion');
            $table->dropColumn('Cut');
            $table->dropColumn('Score');
            $table->dropColumn('Calado');
            $table->dropColumn('S_rotativo');
            $table->dropColumn('S_plano');
            $table->dropColumn('Perforado');
            $table->dropColumn('Fecha');
            $table->dropColumn('Cotizacion');
            $table->dropColumn('Corte');
            $table->dropColumn('Doblez');
            $table->dropColumn('Medida_perforado');
            $table->dropColumn('Hule');
        });
    }
};
