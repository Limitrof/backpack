<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesPartsCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services_parts_category', function (Blueprint $table) {
            $table->integer('services_id')->unsigned()->nullable();
            $table->integer('art_cat_id')->unsigned()->nullable();
            $table->timestamps();

            $table->primary([ 'services_id','art_cat_id']);

            $table->foreign('services_id')->references('id')->on('services');
            $table->foreign('art_cat_id')->references('id')->on('tcd_art_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services_parts_category');
    }
}
