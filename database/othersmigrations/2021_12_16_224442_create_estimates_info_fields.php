<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstimatesInfoFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('estimates', function (Blueprint $table) {
            $table->text('Number');
            $table->text('Customer');
            $table->text('Email');
            $table->text('Date');
            $table->text('Total');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('estimates', function (Blueprint $table) {
            $table->dropColumn('Number');
            $table->dropColumn('Customer');
            $table->dropColumn('Email');
            $table->dropColumn('Date');
            $table->dropColumn('Total');
        });
    }
}
