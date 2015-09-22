<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLawyerEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lawyer_education',function(Blueprint $table){
            $table->increments('lawyer_education_id');
            $table->string('lawyer_education_institution');
            $table->string('lawyer_education_certification');
            $table->date('lawyer_education_year_from');
            $table->date('lawyer_education_year_to');
            $table->string('lawyer_education_status');
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
        Schema::drop('lawyer_education');
    }
}
