<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class  QuestionAnsware extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_answare', function (Blueprint $table) {
            Schema::defaultStringLength(191); 
            $table->increments('id');
            $table->integer('question_id')->unsigned();
            $table->foreign('question_id')->references('id')->on('question');
            $table->integer('answare_id')->unsigned();
            $table->foreign('answare_id')->references('id')->on('answare');
            

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
