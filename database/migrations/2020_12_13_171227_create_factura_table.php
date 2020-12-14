<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura', function (Blueprint $table) {
            $table->integer('CodigoF')->autoIncrement();
            $table->integer('Numero');
            $table->foreign('Numero')->references('id')->on('formaPago');
            $table->integer('cliente');
            $table->foreign('cliente')->references('id')->on('cliente');
            $table->integer('formaPago');
            $table->foreign('formaPago')->references('id')->on('formaPago');
            $table->datetime('Entrada');
            $table->datetime('Salida');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factura');
    }
}
