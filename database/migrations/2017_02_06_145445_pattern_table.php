<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PatternTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('patterns', function(Blueprint $table){
        $table->increments('pattern_id');
        $table->string('pattern_name');
        $table->string('pattern_price');
        $table->string('pattern_description');

       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop("patterns");
    }
}
