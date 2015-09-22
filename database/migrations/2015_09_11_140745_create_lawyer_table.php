<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLawyerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Lawyer', function(Blueprint $table){
              $table->increments('lawyer_id');
              $table->string('lawyer_first_name');
              $table->string('lawyer_middle_name');
              $table->string('lawyer_last_name');
              $table->string('lawyer_email_address');
              $table->boolean('lawyer_status');
              $table->integer('lawyer_lsk_number');
              $table->integer('lawyer_national_id');
              $table->boolean('lawyer_verified_status');
              $table->string('lawyer_experience');
              $table->string('lawyer_bios');
              $table->date('lawyer_date_registered');
              $table->integer('lawyer_mobile_number');
              $table->string('password',60);
              $table->rememberToken();
              $table->timestamps();

              $table->integer('registrant_id')->unsigned();

              /*$table->foreign('registrant_id')
                   ->references('id')
                   ->on('registrant')
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
        Schema::drop('Lawyer');
    }
}
