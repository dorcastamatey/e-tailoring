<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserPatternPriceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_pattern',function(Blueprint, $table){
            $table->increments('pattern_id');
            $table->string('pattern-name');
            $table->Integer('pattern_price');
            $table->string('user_id')->unsigned()->nullable();
            $table->string('user_id')->references('user_id')->on('users');
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
