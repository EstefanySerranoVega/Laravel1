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
        Schema::create('publicidad', function (Blueprint $table) {
            $table->id();
       
            $table->unsignedBigInteger('categoria_id');
            $table->unsignedBigInteger('usuario_id');

            $table->string('titulo_publicidad');
            $table->text('texto_publicidad');
            $table->string('estado_publicidad')->default('AC');
            $table->timestamps();

            $table->foreign('categoria_id')->references('id')->on('categoria');
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
        Schema::dropIfExists('publicidad');
    }
};
