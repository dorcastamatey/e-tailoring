<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MaleMeasurementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('male_measurement',function(Blueprint,$table){
            $table->increments('male_id');
            $table->string('neck');
            $table->string('sleeve');
            $table->string('waist');
            $table->string('hip');
            $table->string('arm_length');
            $table->string('inseam');
            $table->string('user_id')->unsigned()->nullable();
            $table->string('user_id')->references('user_id')on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('male_measurement');
    }
}
