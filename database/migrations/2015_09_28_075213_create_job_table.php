<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('job_title');
            $table->string('description');
            $table->string('job_company');
            $table->string('job_responsibility');
            $table->string('job_requirements');
            $table->date();
            $table->string('category');

            $table->integer('registrant_id')->unsigned();

            $table->foreign('firm_id')->references('id')->on('Firm');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('jobs');
    }
}
