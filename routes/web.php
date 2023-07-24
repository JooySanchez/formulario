<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View; 
use App\Http\Controllers\MonitoreoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/vista1', function () {
//     return view('vista', ['nombre'=>"Jose"]);
// });
    //rutas de prueba

    Route::get('/formulario','App\Http\Controllers\MonitoreoController@mostrar_formulario');
    Route::get('/formulario/cargarcombo/{nivel}/{iddepartamento}/{idprovincia}','App\Http\Controllers\MonitoreoController@cargar_combos');


//........................----------------------------------------------------------


Route::get('/vistanueva',function(){

    $arreglo=["perro","gato","elefante","michi"];
    return view('vistanueva')->with("animales",$arreglo);
});



Route::get('/vista1/{nombre?}','App\Http\Controllers\InicioController@index');

Route::resource('/persona','App\Http\Controllers\PersonaController');

Route::get('/welcome',function(){

    return view('welcome');
});


Route::get('/texto',function(){

    return "<h1> JAJAJA </h1>este es un texto";
});

Route::get('/arreglo',function(){

    $arreglo  = ['lunes','artes','miercoles'];
    return $arreglo;
});


Route::get('/arregloasociativo',function(){

    $arreglo  = [
        'id' => '1',
        'description' => "producto1"
    ];
    return $arreglo;
});

Route::get('/nombre/{nombre}',function($nombre){

   
    return ' <h1>El nombre es :'. $nombre.'</h1>';
});


Route::get('/cliente/{cliente?}',function($cliente = 'cliente por defecto'){

   
    return ' <h1>El cliente es :'. $cliente.'</h1>';
});


Route::get('/route1',function(){

    return "<h1> Ruta 1 </h1>";
})->name("numero1ruta");

Route::get('/route2',function(){

    return redirect()->route("numero1ruta");
});

Route::get('/usuario/{usuario}', function ($usuario) {
    return "<h1>este es el usuario : " .$usuario;
})->where('usuario','[0-9]+');

// Route::get('/usuario/{usuario}', function ($usuario) {
//     return "<h1>este es el usuario : " .$usuario;
// })->where('usuario','[A-Z]+');

if(View::exists('vista2')){
    Route::get('/',function(){

        return view('vista2');
    });
}else{
    Route::get('/',function(){

        return "la vista solicitada no existe";
    });
}