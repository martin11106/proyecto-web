<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Question extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question', function (Blueprint $table) {
            Schema::defaultStringLength(191); 
            $table->increments('id');
            $table->integer('fecha');
            $table->integer('hora');
          
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('user');
            $table->string('titulo');
            $table->string('descripcion');
            $table->string('status');
            

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
