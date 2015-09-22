<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLawyerLawFirmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lawyer_law_firm',function(Blueprint $table){
          $table->increments('lawyer_law_firm_id');
          $table->string('lawyer_law_firm_name');
          $table->date('lawyer_law_firm_date');
          $table->date('lawyer_law_firm_year_from');
          $table->date('lawyer_law_firm_year_to');
          $table->string('lawyer_law_firm_status');
          
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
          Shema::drop('lawyer_law_firm');
    }
}
