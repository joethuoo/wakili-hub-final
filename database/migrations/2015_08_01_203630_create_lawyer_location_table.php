<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLawyerLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lawyer_location',function(Blueprint $table){
              $table->increments('lawyer_location_id');
              $table->string('lawyer_location_building');
              $table->string('lawyer_location_street');
              $table->string('lawyer_location_town');
              $table->string('lawyer_location_county');
              $table->string('lawyer_location_city');
              $table->string('lawyer_location_country');
              $table->double('lawyer_location_google');
              $table->string('lawyer_location_status');
              $table->integer('lawyer_id')->unsigned();

              /*$table->foreign('lawyer_id')
                   ->references('id')
                   ->on('Lawyer')
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
        Schema::drop('lawyer_location');
    }
}
