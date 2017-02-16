<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {Schema::create('orders',function(Blueprint,$table){
        $table->increments('orders_id');
        $table->Integer('totalPrice');
        $table->string('user_id')->unsigned()->nullable();
        $table->string('delivery_id')->unsigned()->nullable();
        $table->string('user_id')->references('user_id')->on('users');
        $table->string('delivery_id')->references('delivery_id')->on('delivery_info');



    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orders');
    }
}
