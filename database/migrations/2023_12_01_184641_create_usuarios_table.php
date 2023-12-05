<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellidos');
            $table->enum('genero', ['Masculino', 'Femenino']);
            $table->unsignedBigInteger('numeroTelefono');
            $table->string('correo')->unique();
            $table->string('contrasena');
            $table->unsignedBigInteger('id_domicilio')->nullable();
            $table->foreign('id_domicilio')->references('id')->on('domicilios');
            $table->rememberToken();
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
        Schema::dropIfExists('usuarios');
    }
};
