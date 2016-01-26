<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLawyerAssociationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lawyer_association', function(Blueprint $table){
             $table->increments('lawyer_association_id');
             $table->string('lawyer_association_institution');
             $table->string('lawyer_association_member');
             $table->date('year');
             $table->string('status');
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
        Schema::drop('lawyer_association');
    }
}
