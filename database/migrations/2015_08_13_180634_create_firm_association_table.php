<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFirmAssociationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firm_association', function(Blueprint $table){
            $table->increments('firm_association_id');
            $table->string('firm_association_institution');
            $table->string('firm_association_member');
            $table->date('firm_association_year');
            $table->string('firm_association_status');

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
        Schema::drop('firm_association');
    }
}
