<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLawyerPhoto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lawyer_photo',function(Blueprint $table){
            $table->increments('lawyer_photo_id');
            $table->string('lawyer_photo_name');
            
             $table->integer('lawyer_id')->unsigned();
             $table->foreign('lawyer_id')->references('id')->on('Lawyer');
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
        Schema::drop('lawyer_photo');
    }
}
