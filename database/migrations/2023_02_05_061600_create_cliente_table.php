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
        Schema::create('cliente', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('persona_id');
            
            $table->string('email_cliente')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('direccion_cliente');
            $table->string('estado_cliente')->default('AC');
            $table->timestamps();

            $table->foreign('persona_id')->references('id')->on('persona');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cliente');
    }
};
