<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLawyerPracticeAreaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lawyer_practice_areas', function(Blueprint $table){
            $table->increments('lawyer_practice_area_id');
            $table->string('lawyer_practice_name');
            $table->string('lawyer_practice_status');
            $table->string('lawyer_practice_level');
            $table->date('lawyer_practice_year_from');
            $table->integer('lawyer_id')->unsigned();

           /* $table->foreign('lawyer_id')
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
        Schema::drop('lawyer_practice_areas');
    }
}
