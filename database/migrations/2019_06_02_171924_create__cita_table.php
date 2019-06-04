<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_cita', function (Blueprint $table) {
            $table->increments('idcita');
            $table->timestamps();
            $table->date('fecha');  
            $table->unsignedInteger('fk_idpaciente');
            $table->unsignedInteger('fk_idodontologo');
            $table->foreign('fk_idpaciente')->references('idpaciente')->on('_paciente');
            $table->foreign('fk_idodontologo')->references('idodontologo')->on('_odontologo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_cita');
    }
}
