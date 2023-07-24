<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    //
    public function index(Request $request,$nombre = 'elfa'){

        $edad = $request->query("edad","19");
        
        $arreglo =["nombre"=>$nombre,"edad"=>$edad];



        return view('vista')->with($arreglo);
    }
}
