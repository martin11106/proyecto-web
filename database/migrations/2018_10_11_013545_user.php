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
            $table->increments('id');
            $table->integer('datos_personales_id')->unsigned();
            $table->foreign('datos_personales_id')->references('id')->on('datos_personales');
            $table->integer('datos_user_id')->unsigned();
            $table->foreign('datos_user_id')->references('id')->on('datos_user');
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
