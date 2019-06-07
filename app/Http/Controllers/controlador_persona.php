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
}
