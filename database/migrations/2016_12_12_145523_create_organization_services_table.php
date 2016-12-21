<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organization_services', function (Blueprint $table) {
            $table->integer('organization_id')->unsigned()->nullable();
            $table->integer('services_id')->unsigned()->nullable();
            $table->text('guarantee_text');
            $table->integer('guarantee_period');
            $table->integer('enabled');
            $table->timestamps();

            $table->primary(['organization_id', 'services_id']);

            $table->foreign('organization_id')->references('id')->on('organizations');
            $table->foreign('services_id')->references('id')->on('services');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organization_services');
    }
}
