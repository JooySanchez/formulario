<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MonitoreoController extends Controller
{
    public function mostrar_formulario(Request $request){

        return view('prueba');
    }


    public function cargar_combos(Request $request,$nivel = 0,$iddepartamento = 0,$idprovincia = 0){

    //    dd($request);

        $data = [];

        // if (empty($nivel)) {
        //      $data['error'] = 'El parametro nivel no puede estar vacío';
        //     return response()->json($data, 400); // Retorna el error con el código de estado 400 Bad Request
        //  }
        //  if (!ctype_digit((string)$nivel)) {
        //     $data['error'] = 'El parametro nivel debe ser un número entero válido';
        //     return response()->json($data, 400); 
        // }

        //  if (!is_int($nivel)) {
        //     $data['error'] = 'El parametro nivel no puede ser letra';
        //     return response()->json($data, 400); 
        // } 
        // // Verificar que los valores sean numéricos
        // if (!is_numeric($nivel) || !is_numeric($iddepartamento) || !is_numeric($idprovincia)) {
        //     $data['error'] = 'Tienen que ser enteros';
        //     return response()->json($data, 400); 
        // }   

        DB::enableQueryLog();   
 
        $data['data'] = DB::select("CALL SP_CARGAR_COMBOS(?,?,?)",[$nivel, $iddepartamento, $idprovincia]);

        $queries = DB::getQueryLog();

        
        return response()->json($data,200);
    }
}
