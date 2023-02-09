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
        Schema::create('contrasena', function (Blueprint $table) {
            $table->id();
       
            $table->unsignedBigInteger('usuario_id');

            $table->string('contrasena');
            $table->string('estado_contrasena')->default('AC');
            $table->timestamps();

            $table->foreign('usuario_id')->references('id')->on('usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contrasena');
    }
};
