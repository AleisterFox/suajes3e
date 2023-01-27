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
        Schema::table('plecas_inventories', function (Blueprint $table) {
            $table->text('Codigo_interno');
            $table->text('Nombre');
            $table->text('Descripcion');
            $table->text('Tipo');
            $table->text('Calibre');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('plecas_inventories', function (Blueprint $table) {
            $table->dropColumn('Codigo_interno');
            $table->dropColumn('Nombre');
            $table->dropColumn('Descripcion');
            $table->dropColumn('Tipo');
            $table->dropColumn('Calibre');
        });
    }
};
