<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFirmLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firm_location', function(Blueprint $table){
          $table->increments('firm_location_id');
          $table->string('firm_location_building');
          $table->string('firm_location_street');
          $table->string('firm_location_town');
          $table->string('firm_location_county');
          $table->string('firm_location_city');
          $table->string('firm_location_country');
          $table->string('firm_location_google');
          $table->string('firm_location_status');

          $table->integer('firm_id')->unsigned();

          /*$table->foreign('firm_id')
                   ->references('id')
                   ->on('Firm')
                   ->onDelete('cascade');*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('firm_location');
    }
}
