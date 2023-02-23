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
            $table->text('Hule2')->nullable();
            $table->text('Hule3')->nullable();
            $table->text('Hule4')->nullable();
            $table->text('Hule5')->nullable();
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
            $table->dropColumn('Hule2');
            $table->dropColumn('Hule3');
            $table->dropColumn('Hule4');
            $table->dropColumn('Hule5');
        });
    }
};
