<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProducersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
       Schema::create('producer', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('type', ['N', 'J'])->comment('Natural o Juridica');
            $table->enum('pre_identifier', ['V', 'E', 'J', 'G'])->comment('Nacionalidad o prefijo del RIF');
            $table->string('identifier', 20)->comment('Numero de cedula o RIF');
            $table->string('address', 400)->comment('Direccion o domicilio fiscal');
            $table->string('home_phone', 20)->unsigned();
            $table->string('cel_phone', 20)->unsigned();
            $table->string('email', 50)->unsigned();
            $table->integer('id_status')->unsigned();
            $table->foreign('id_status')->references('id')->on('status');
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
        Schema::dropIfExists('producer');
    }
}
