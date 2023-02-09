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
        Schema::create('usuario', function (Blueprint $table) {
            $table->id();
        
            $table->unsignedBigInteger('persona_id');
            $table->unsignedBigInteger('rol_id');

            $table->string('nombre_usuario',120)->unique();
            $table->string('profile_usuario');
            $table->string('estado_usuario')->default('AC');
            $table->timestamps();

            $table->foreign('persona_id')->references('id')->on('persona');
            $table->foreign('rol_id')->references('id')->on('rol');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
};
