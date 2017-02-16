<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PatternImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pattern_image', function(Blueprint $table){
            $table->increments('image_id');
            $table->string('image');
            $table->string('pattern_id')->unsigned()->nullable();
            $table->foreign('pattern_id')->references('pattern_id')->on('patterns');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pattern_image');
    }
}
