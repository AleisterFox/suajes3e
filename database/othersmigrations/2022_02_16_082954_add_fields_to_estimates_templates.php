<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToEstimatesTemplates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('estimate_templates', function (Blueprint $table) {
            $table->text('Name');
            $table->text('Actions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('estimates_templates', function (Blueprint $table) {
            $table->dropColumn('Name');
            $table->dropColumn('Actions');
        });
    }
}
