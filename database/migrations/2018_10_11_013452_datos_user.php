<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DatosUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_user', function (Blueprint $table) {
            Schema::defaultStringLength(191); 
            $table->increments('id');
            $table->string('correo');
            $table->string('password');
            $table->string('matricula');
    
            

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
