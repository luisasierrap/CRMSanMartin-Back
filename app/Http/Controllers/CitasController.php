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

        /*
        {
        "idcita": 3,
        "nombreOdontologo": "Juan Diego",
        "nombrePaciente": "Luisa Sierra",
        "fecha": "2019-06-01",
        "hora": "12:00:00",
        "ido": 1,
        "idp": 1,
        "IDOdontologo": "2",
        "Fecha": "2019-06-20",
        "Hora": "17:00"
        }
         */

         $i = 0;

        //  return "Objeto:".$request['Fecha']." ".$request['Hora']." ".$request['IDOdontologo'];

        if(isset($request['Fecha']) && $request['Fecha'] != '' ){
            $update_cita = DB::table('citas_listado')
            ->where('idcita', $request['idcita'])
            ->update(['fecha'=>$request['Fecha']]);
            $i ++;
        }
        if(isset($request['Hora']) && $request['Hora'] != ''){
            $update_cita = DB::table('citas_listado')
            ->where('idcita', $request['idcita'])
            ->update(['hora' =>$request['Hora']]);
            $i ++;

        }
        if(isset($request['IDOdontologo']) && $request['IDOdontologo'] != ''){
            $update_cita = DB::table('citas_listado')
            ->where('idcita', $request['idcita'])
            ->update(['ido' => $request['IDOdontologo']]);
            $i ++;

        } 

        return "'".$i."'"; 
    }  
    
    public function eliminarCita(Request $request){
        $deleted = DB::delete('delete from _cita where idcita = '.$request[0].';' );
        return $deleted;
    }
}
