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
        Schema::create('rol', function (Blueprint $table) {
            $table->id();
       
            $table->unsignedBigInteger('accesos_id');

            $table->string('nombre_rol',30);
            $table->string('estado_rol')->default('AC');
            $table->timestamps();

            $table->foreign('accesos_id')->references('id')->on('accesos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rol');
    }
};
