<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFirmPracticeAreaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firm_practice_area', function(Blueprint $table){
           $table->increments('firm_practice_id');
           $table->string('firm_practice_name');
           $table->string('firm_practice_status');
           $table->date('firm_practice_year_from');

           $table->integer('firm_id')->unsigned();

           

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('firm_practice_area');
    }
}
