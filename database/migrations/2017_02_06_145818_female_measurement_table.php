<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FemaleMeasurementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('female_measurement',function(Blueprint $table){
        $table->increments('female_measurement_id');
        $table->string('bra');
        $table->string('bust');
        $table->string('waist');
        $table->string('hip');
        $table->string('full_hip');
        $table->string('arm_length');
        $table->string('front_waist_line');
        $table->string('back_waist_line');
        $table->string('bust_separation');
        $table->string('thorax_width');
        $table->string('back_length');
        $table->string('shoulder-width');
        $table->string('arm_hole');
        $table->string('stride');
        $table->string('shoulder_cup');
        $table->string('knee-length');
        $table->string('ankle_length');
        $table->string('back_width');
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
        Schema::drop('female_measurement');

    }
}
