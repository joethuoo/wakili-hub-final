<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLawyerContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lawyer_contact', function(Blueprint $table){
            $table->increments('lawyer_contact_id');
            $table->string('lawyer_contact_name');
            $table->string('lawyer_contact');
            $table->string('lawyer_contact_type');
            $table->string('lawyer_contact_status');
            $table->Integer('lawyer_id')->unsigned();

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
        Schema::drop('lawyer_contacts');
    }
}
