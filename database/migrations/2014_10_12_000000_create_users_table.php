<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('users_id');
            $table->string('first_name');
            $table->string('second_name');
            $table->string('mobile_number');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->string('activation_code');
            $table->boolean('active')->default(0);
            $table->rememberToken();
            $table->timestamps();

            $table->integer('lawyer_id')->unsigned();

             $table->integer('firm_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
