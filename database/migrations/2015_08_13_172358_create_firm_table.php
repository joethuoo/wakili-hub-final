<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFirmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Firm',function(Blueprint $table){
             $table->increments('firm_id');
             $table->string('firm_name');
             $table->integer('firm_registration_number');
             $table->string('firm_status');
             $table->string('firm_verified_status');
             $table->string('firm_experience');
             $table->timestamp('firm_registered_date');

             $table->integer('firm_mobile_number')->unsigned();

             $table->integer('registrant_id')->unsigned();

         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Firm');
    }
}
