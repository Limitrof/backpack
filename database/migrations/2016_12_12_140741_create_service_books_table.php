<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_books', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('vin',255);
            $table->string('gos_number',100);
            $table->integer('tcd_car_id')->unsigned()->nullable();
            $table->timestamps();
			
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('tcd_car_id')->references('id')->on('tcd_cars');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_books');
    }
}
