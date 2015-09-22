<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientNotificationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_notification', function(Blueprint $table){
           $table->increments('client_notification_id');
           $table->string('client_notification_status');

           /*$table->foreign('client_id')
                   ->references('id')
                   ->on('Client')
                   ->onDelete('cascade');*/

                   $table->integer('client_id')->unsigned();

            /*$table->foreign('notification_id')
                   ->references('id')
                   ->on('Notification')
                   ->onDelete('cascade');*/
                   $table->integer('notification_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('client_notification');
    }
}
