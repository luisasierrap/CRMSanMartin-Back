<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function listaPaciente(){
        $listaPacientes = DB::select('select * from _paciente');

        if(!$listaPacientes){
            return 'Lista de Pacientes Vacía.';
        }
        return $listaPacientes;
    }
}
