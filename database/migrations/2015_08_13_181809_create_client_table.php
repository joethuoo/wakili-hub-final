<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client', function(Blueprint $table){
            $table->increments('client_id');
            $table->string('client_first_name');
            $table->string('client_last_name');
            $table->string('client_email_address');
            $table->integer('client_mobile_number');
            $table->string('password');
            $table->string('client_status');
            $table->date('client_date_added');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('client');
    }
}
