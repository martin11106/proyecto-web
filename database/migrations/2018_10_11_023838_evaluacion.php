<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Evaluacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluacion', function (Blueprint $table) {
            Schema::defaultStringLength(191); 
            $table->increments('id');
            $table->integer('calificacion');
            $table->string('comentario');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('user');
            $table->string('fecha');  

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
