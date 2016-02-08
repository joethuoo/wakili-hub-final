<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users',function(Blueprint $table){
        $table->increments('user_id');
        $table->string('first_name');
         $table->string('second_name');
          $table->string('mobile_number');
           $table->string('email')->unique;
             $table->string('password');
              $table->string('activation_code');
               $table->tinyInteger('active');


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
