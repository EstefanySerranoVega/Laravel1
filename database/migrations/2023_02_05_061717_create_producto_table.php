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
        Schema::create('producto', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('categoria_id');

            $table->string('nombre_producto',180);
            $table->string('img_producto');
            $table->string('marca_producto',180);
            $table->string('industria_producto',220)->nullable();
            $table->string('codigo_producto')->unique();
            $table->text('descripcion_producto');
            $table->string('estado_producto')->default('AC');
            $table->timestamps();

            $table->foreign('categoria_id')->references('id')->on('categoria');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto');
    }
};
