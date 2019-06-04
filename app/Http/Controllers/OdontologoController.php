<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class OdontologoController extends Controller
{
    //
    
    public function listaOdontologo(){
        $listaOdontologo = DB::select('select * from _odontologo');

        if(!$listaOdontologo){
            return 'Lista de Odontólogos Vacía.';
        }
        return $listaOdontologo;
    }
}
