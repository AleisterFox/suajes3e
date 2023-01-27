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
        Schema::table('estimates', function (Blueprint $table) {
            $table->text('Sj1');
            $table->integer('S1');
            $table->text('Sj2')->nullable();
            $table->integer('S2')->nullable();
            $table->text('Sj3')->nullable();
            $table->integer('S3')->nullable();
            $table->text('Sj4')->nullable();
            $table->integer('S4')->nullable();
            $table->text('Sj5')->nullable();
            $table->integer('S5')->nullable();
            $table->text('Folio');
            $table->text('Tiempo_liberacion');
            $table->string('Img1');
            $table->string('Img2')->nullable();
            $table->string('Img3')->nullable();
            $table->string('Img4')->nullable();
            $table->string('Img5')->nullable();
            $table->text('Cliente');
            $table->text('Fecha');
            $table->text('Total');
            $table->text('Qty1');
            $table->integer('Subtotal1');
            $table->text('Qty2')->nullable();
            $table->integer('Subtotal2')->nullable();
            $table->text('Qty3')->nullable();
            $table->integer('Subtotal3')->nullable();
            $table->text('Qty4')->nullable();
            $table->integer('Subtotal4')->nullable();
            $table->text('Qty5')->nullable();
            $table->integer('Subtotal5')->nullable();
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
            $table->dropColumn('Sj1');
            $table->dropColumn('S1');
            $table->dropColumn('Sj2');
            $table->dropColumn('S2');
            $table->dropColumn('Sj3');
            $table->dropColumn('S3');
            $table->dropColumn('Sj4');
            $table->dropColumn('S4');
            $table->dropColumn('Sj5');
            $table->dropColumn('S5');
            $table->dropColumn('Folio');
            $table->dropColumn('Tiempo_liberacion');
            $table->dropColumn('Img1');
            $table->dropColumn('Img2');
            $table->dropColumn('Img3');
            $table->dropColumn('Img4');
            $table->dropColumn('Img5');
            $table->dropColumn('Cliente');
            $table->dropColumn('Fecha');
            $table->dropColumn('Total');
            $table->dropColumn('Qty1');
            $table->dropColumn('Subtotal1');
            $table->dropColumn('Qty2');
            $table->dropColumn('Subtotal2');
            $table->dropColumn('Qty3');
            $table->dropColumn('Subtotal3');
            $table->dropColumn('Qty4');
            $table->dropColumn('Subtotal4');
            $table->dropColumn('Qty5');
            $table->dropColumn('Subtotal5');
        });
    }
};
