<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('invoices', function (Blueprint $table) {
            $table -> text('Date');
            $table -> text('Date_due');
            $table -> text('Item');
            $table -> text('Item_description');
            $table -> text('Quantity');
            $table -> text('Price');
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
            $table -> dropColumn('Date');
            $table -> dropColumn('Date_due');
            $table -> dropColumn('Item');
            $table -> dropColumn('Item_description');
            $table -> dropColumn('Quantity');
            $table -> dropColumn('Price');
        });
    }
}
