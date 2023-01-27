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
            $table->text('Pleca_2000')->nullable();
            $table->text('Profundidad_pleca_2000')->nullable();
            $table->text('Type');
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
            $table->dropColumn('Pleca_2000');
            $table->dropColumn('Profundidad_pleca_2000');
            $table->dropColumn('Type');
        });
    }
};
