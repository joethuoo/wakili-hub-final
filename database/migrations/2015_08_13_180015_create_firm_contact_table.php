<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFirmContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firm_contact', function(Blueprint $table){
            $table->increments('firm_contact_id');
            $table->string('firm_contact_name');
            $table->string('firm_contact');
            $table->string('firm_contact_type');
            $table->string('firm_contact_status');

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
        Schema::drop('firm_contact');
    }
}
