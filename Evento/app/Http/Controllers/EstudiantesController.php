<?php

namespace App\Http\Controllers;

use App\Events\EstudianteRegistrado;
use App\Student;
use Illuminate\Http\Request;

class EstudiantesController extends Controller
{
    public function index(){
    	return view('registrarEstudiante');
    }

    public function guardar( Request $request ){

    	$nombre 	= $request->nombre;
    	$clase		= $request->clase;
    	$edad 		= $request->edad; 

    	$estudiante = new Student();

    	$estudiante->nombre 	= $nombre;
    	$estudiante->clase 		= $clase;
    	$estudiante->edad 		= $edad;

    	$estudiante->save();

    	$datos = array( 'nombre'=>$nombre, 'clase'=>$clase, 'edad'=>$edad );

    	event( new EstudianteRegistrado($datos) );

    	return back();
    }
}
