<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserPatternTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_pattern',function(Blueprint,$table){
            $table->increments('user_pattern_id');
            $table->Integer('user_id')->unsigned()->nullable();
            $table->Integer('user_id')->references('user-id')on->('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_pattern');
    }
}
