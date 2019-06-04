<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOdontologoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_odontologo', function (Blueprint $table) {
            $table->increments('idodontologo');
            $table->timestamps();
            $table->string('nombreOdontologo',50);
            $table->string('cedulaOdontologo',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_odontologo');
    }
}
