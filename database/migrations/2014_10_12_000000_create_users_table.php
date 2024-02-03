<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDomicilioTableUnique extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_domicilio', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained(); // Agrega una clave foránea a la tabla de usuarios
            $table->string('domicilio');
            $table->string('numero_exterior');
            $table->string('colonia');
            $table->string('cp');
            $table->string('ciudad');
            // Puedes agregar más columnas según sea necesario

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
        Schema::dropIfExists('user_domicilio');
    }
}
