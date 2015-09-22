<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFirmSocialConnection extends Migration
{
  /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firm_social_connection', function(Blueprint $table){
           $table->increments('firm_social_id');
           $table->string('firm_social_name');
           $table->string('firm_social_account');
           $table->string('firm_social_type');
           $table->string('firm_social_status');
      
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
        Schema::drop('firm_social_connection');
    }
}
