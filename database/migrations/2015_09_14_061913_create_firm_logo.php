<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFirmLogo extends Migration
{
    
        /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firm_logo', function(Blueprint $table){
          $table->increments('firm_logo_id');
          $table->string('firm_photo_filename');

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
        Schema::drop('firm_logo');
    }
}
