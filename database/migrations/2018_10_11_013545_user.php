<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class User extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            Schema::defaultStringLength(191); 
            $table->increments('id');       $table->string('nombre');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');           
            $table->string('matricula');
            $table->string('correo');
            $table->string('password');
            $table->string('genero');
            $table->integer('telefono');
            $table->integer('puntos');
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
        //
    }
}
