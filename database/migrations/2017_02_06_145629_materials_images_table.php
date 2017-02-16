<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MaterialsImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_image',function(Blueprint,$table){
            $table->increments('image_id');
            $table->string('image');
            $table->string('product_id')->unsigned()->nullable();
            $table->string('product_id')->references('product_id')->on('materials');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('material_image');
    }
}
