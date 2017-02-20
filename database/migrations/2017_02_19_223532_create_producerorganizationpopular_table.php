<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProducerorganizationpopularTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producer_popular_organization', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_producer')->unsigned();
            $table->integer('id_popular_organization')->unsigned();
            $table->foreign('id_producer')->references('id')->on('producer');
            $table->foreign('id_popular_organization')->references('id')->on('popular_organization');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producer_popular_organization');
    }
}
