<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('service_book_id')->unsigned()->nullable();
            $table->integer('organization_id')->unsigned()->nullable();
            $table->dateTime('order_date');
            $table->integer('status');
            $table->string('comment',1500);
            $table->integer('manager_user_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('service_book_id')->references('id')->on('service_books');
            $table->foreign('organization_id')->references('id')->on('organizations');
            $table->foreign('manager_user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
