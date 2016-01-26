<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrant', function(Blueprint $table){
            $table->increments('registrant_id');
            $table->string('registrant_first_name');
            $table->string('registrant_last_name');
            $table->integer('registrant_mobile_number');
            $table->string('registrant_email_address');
            $table->string('registrant_password');
            $table->boolean('confirmation')->default(0);
            $table->string('confirmation_code')->nullable();

             $table->integer('lawyer_id')->unsigned();

             $table->integer('firm_id')->unsigned();

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
          Schema::drop('registrant');
    }
}
