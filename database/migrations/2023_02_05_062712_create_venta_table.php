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
        Schema::create('venta', function (Blueprint $table) {
            $table->id();
              
            $table->unsignedBigInteger('cliente_producto_id');

            $table->timestamp('fecha_venta');
            $table->string('transaccion_venta');
            $table->integer('total_venta');
            $table->timestamps();

            $table->foreign('cliente_producto_id')->references('id')->on('cliente_producto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venta');
    }
};
