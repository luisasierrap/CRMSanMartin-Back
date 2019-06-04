<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_paciente', function (Blueprint $table) {
            $table->increments('idpaciente');
            $table->timestamps();
            $table->string('nombrePaciente',50);
            $table->string('cedulaPaciente',50);
            $table->integer('telefonoPaciente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_paciente');
    }
}
