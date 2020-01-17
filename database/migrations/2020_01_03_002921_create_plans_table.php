<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users');
            
            $table->integer('mon_t')->unsigned();
            $table->string('mon_c');
            $table->integer('tue_t')->unsigned();
            $table->string('tue_c');
            $table->integer('wed_t')->unsigned();
            $table->string('wed_c');
            $table->integer('thu_t')->unsigned();
            $table->string('thu_c');
            $table->integer('fri_t')->unsigned();
            $table->string('fri_c');
            $table->integer('sat_t')->unsigned();
            $table->string('sat_c');
            $table->integer('sun_t')->unsigned();
            $table->string('sun_c');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plans');
    }
}
