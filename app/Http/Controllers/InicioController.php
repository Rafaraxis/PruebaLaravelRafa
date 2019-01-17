<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacto;

class InicioController extends Controller
{
    public function hola(){
        //Obtengo todos los registros de la tabla contactos
        $contactos = Contacto::all();

        //Argumentos con la info que va a autilizar la vista
        $arumentos = array();
        $argumentos['contactos'] = $contactos;

        return view('hola', $argumentos);
    }
}
