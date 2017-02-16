<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeliveryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_info',function(Blueprint $table){
            $table->increments('delivery_id');
            $table->string('location');
            $table->string('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('user_id')->on ('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::drop('delivery_info'); 
    }
}
