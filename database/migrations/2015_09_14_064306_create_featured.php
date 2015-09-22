<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeatured extends Migration
{
 /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('featured', function(Blueprint $table){
            $table->increments('featured_id');
            $table->string('featured_status');
            $table->string('featured_type');
            $table->date('featured_date');

            /*$table->foreign('client_id')
                  ->reference('id')
                  ->on('Client')
                  ->onDelete('cascade');*/
                  $table->integer('firm_id')->unsigned();

                  $table->integer('lawyer_id')->unsigned();






         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('featured');
    }
}
