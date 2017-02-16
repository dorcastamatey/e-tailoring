<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart',function(Blueprint $table){
            $table->increments('cart_id');
            $table->string('product_id')->unsigned()->nullable();
            $table->string('pattern_id')->unsigned()->nullable();
            $table->string('product_id')->references('product_id')->on('materials');
            $table->string('pattern_id')->references('pattern_id')->on('patterns');
            $table->string('productName');





        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cart');
    }
}
