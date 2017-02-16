<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserPatternImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_patter_images',function(Blueprint,$table){
            $table->increments('pattern_image_id');
            $table->string('images');
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
        Schema::drop('user_patter_images');
    }
}
