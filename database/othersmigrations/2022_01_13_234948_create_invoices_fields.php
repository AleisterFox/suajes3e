<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('invoices', function (Blueprint $table) {
            $table->text('Number');
            $table->text('Customer');
            $table->text('Status');
            $table->text('Email');
            $table->text('Amount_Due');
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
        Schema::table('invoices', function (Blueprint $table) {
            $table->dropColumn('Number');
            $table->dropColumn('Customer');
            $table->dropColumn('Status');
            $table->dropColumn('Email');
            $table->dropColumn('Amount_Due');
            $table->dropColumn('Total');
        });
    }
}
