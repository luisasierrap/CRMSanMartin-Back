<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

class CitasController extends Controller
{

    public function index()
    {
        echo "Hello";
    }

    public function store()
    {
        echo "store";
    } 
    public function crearCita(Request $request){ 
        
        //$fecha_cita = $request["Fecha"].$request["Hora"];
        $crearCita = DB::insert('insert into _cita (fecha,hora,fk_idpaciente, fk_idodontologo) values (?,?,?)', [$request["Fecha"],$request["Hora"],$$request["IDOdontologo"],$request["IDPaciente"]]);
        if ($crearCita == 1 ){
            return "'".$crearCita."'";
        }   
        else{
            return "Ocurrió un problema al guardar los datos";      
        }    
    }

    //Listar Cita
    public function listarCita(){
        $listaCitas = DB::select('select * from citas_listado');

        if(!$listaCitas){
            return 'Lista de Citas Vacía.';
        }
        
        return $listaCitas;
    }

   //Modificar Cita
    public function actualizarCita(Request $request){
        return $request;
        $update_cita = DB::table('citas_listado')
        ->where('idcita', $request['idcita'])
        ->update(['fecha'=>$request['fecha'], 'hora' =>$request['hora'], 'ido' => $request['IDOdontologo']]);
        return $update_cita; 
    }     
}
