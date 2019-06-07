<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controlador_persona extends Controller
{
    public function ingresar(){
    	return view('ingresar');
    }

    public function mostrar(){
    	return view('mostrar');
    }

    public function ingresar1(request $respuesta){
      $nomb=$respuesta->nombre;
      $apel=$respuesta->apellido;
      $ced=$respuesta->cedula;
      $pro=$respuesta->promedio;

      $arreg=array("$nomb","$apel","$ced","$pro");
      return view('mostrar',compact('arreg'));
    }
}
