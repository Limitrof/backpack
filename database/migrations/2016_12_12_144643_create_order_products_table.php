<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id')->unsigned()->nullable();
            $table->string('search_number',100);
            $table->integer('order_service_id')->unsigned()->nullable();
            $table->date('guarantee_end_date');
            $table->timestamps();

            $table->foreign('order_id')->references('id')->on('orders');
            $table->foreign('order_service_id')->references('id')->on('order_services');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_products');
    }
}
