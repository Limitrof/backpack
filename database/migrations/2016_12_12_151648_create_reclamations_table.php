<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReclamationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reclamations', function (Blueprint $table) {
            $table->increments('id');
            $table->date('reclamation_date');
            $table->integer('manager_user_id')->unsigned()->nullable();
            $table->text('reclamation_info');
            $table->integer('order_id')->unsigned()->nullable();
            $table->string('services_ids',255);
            $table->string('products_ids',255);
            $table->timestamps();

            $table->foreign('manager_user_id')->references('id')->on('users');
            $table->foreign('order_id')->references('id')->on('orders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reclamations');
    }
}
