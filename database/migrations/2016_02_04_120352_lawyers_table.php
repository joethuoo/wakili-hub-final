<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LawyersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lawyer', function(Blueprint $table){
            $table->increments('lawyer_id');
            $table->string('lawyer_first_name');
            $table->string('lawyer_middle_name');
            $table->string('lawyer_last_name');
            $table->string('lawyer_email_address');
            $table->string('lawyer_lsk_number');
            $table->string('national_id');
            $table->string('lawyer_experience');
            $table->string('lawyer_bios');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('lawyer');
    }
}
