<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLawyerSocialConnectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lawyer_social_connection', function(Blueprint $table){
             $table->increments('lawyer_social_connection_id');
             $table->string('lawyer_social_name');
             $table->string('lawyer_social_account');
             $table->string('lawyer_social_type');
             $table->string('lawyer_social_status');
             
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
        Schema::drop('lawyer_social_connection');
    }
}
