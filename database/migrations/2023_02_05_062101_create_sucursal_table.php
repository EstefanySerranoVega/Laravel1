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
        Schema::create('sucursal', function (Blueprint $table) {
            $table->id();
        
            $table->unsignedBigInteger('almacen_id');

            $table->string('nombre_sucursal',150);
            $table->string('direccion_sucursal');
            $table->string('estado_sucursal',80)->default('AC');
            $table->timestamps();
            
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
        Schema::dropIfExists('sucursal');
    }
};
