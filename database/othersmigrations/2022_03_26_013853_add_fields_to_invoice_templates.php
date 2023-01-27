<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToInvoiceTemplates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('invoice_templates', function (Blueprint $table) {
            $table -> text('Name');
            $table -> text('Actions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('invoice_templates', function (Blueprint $table) {
            $table -> dropColumn('Name');
            $table -> dropColumn('Actions');
        });
    }
}
