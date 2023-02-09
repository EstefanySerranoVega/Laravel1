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
        Schema::create('persona', function (Blueprint $table) {
            $table->id();


            $table->string('nombre_persona',180);
            $table->string('paterno_persona',80);
            $table->string('materno_persona',80);
            $table->string('telefono_persona',20);
            $table->timestamp('telefono_verified_at')->nullable();
            $table->string('codigo_producto')->unique();
            $table->date('nacimiento_persona');
            $table->string('estado_persona')->default('AC');
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
        Schema::dropIfExists('persona');
    }
};
