<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DatosPersonales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_personales', function (Blueprint $table) {
            Schema::defaultStringLength(191); 
            Schema::defaultStringLength(191);
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido_materno');
            $table->string('apellido_paterno');
            $table->string('genero');
            $table->integer('telefono');
            

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
