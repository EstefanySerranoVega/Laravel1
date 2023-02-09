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
        Schema::create('almacen_producto', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('producto_id');
            $table->unsignedBigInteger('proveedor_id');
            $table->unsignedBigInteger('almacen_id');

            $table->decimal('pventa_ap',8,2);
            $table->decimal('pcompra_ap',8,2);
            $table->string('lote_ap',10);
            $table->integer('cantidad_ap');
            $table->timestamp('ingreso_ap');
            $table->string('estado_ap')->default('AC');
            $table->timestamps();

            $table->foreign('usuario_id')->references('id')->on('usuario');
            $table->foreign('producto_id')->references('id')->on('producto');
            $table->foreign('proveedor_id')->references('id')->on('proveedor');
            $table->foreign('almacen_id')->references('id')->on('almacen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('almacen_producto');
    }
};
