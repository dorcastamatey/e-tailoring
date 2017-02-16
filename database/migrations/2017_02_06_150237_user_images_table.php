<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_iamge',function(Blueprint,$table){
            $table->increments('image_id');
            $table->string('image');
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
        Schema::drop('user_iamge');
    }
}
