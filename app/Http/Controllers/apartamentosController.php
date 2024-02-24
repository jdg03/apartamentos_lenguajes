<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Duenio;
use  App\Models\Propiedad;

class apartamentosController extends Controller

{
    
    public function inicio(){

        return view('welcome');
    }

    public function precio($piso, $area) {
        $valorMetro = 1500;
    
        
        if ($piso === null || $piso < 1 || $piso > 12) {
            $piso = 1;
        }
    
       
        for ($i = 1; $i < $piso; $i++) {
            $valorMetro += $valorMetro * 0.01; // Aumento del 0.1%
        }
    
       
        $precioFinal = $area * $valorMetro;
    
        return view('precio', compact('precioFinal'));
    }

    public function duenios(){
     
        $duenios = Duenio:: all(); 
        return view('duenios', compact('duenios'));
    }

   

    public function apartementos(){
     
        $propiedades = Propiedad:: all(); 
        return view('apartamentos', compact('propiedades'));
    }


    public function crearDuenio(){

        return view('crearDuenio');
    }
    

    public function guardarDuenio(Request $req){

        $nvoDuenio = new Duenio();
        $nvoDuenio->nombre = $req->input('nombre');
        $nvoDuenio->apellido = $req->input('apellido');
        $nvoDuenio->correo = $req->input('correo');
       
        
        $nvoDuenio->save();

        return redirect('/');
    }

    public function verPropiedadesDuenio(Request $req){
        // Obtener el ID del dueño desde la solicitud (request)
        $idDuenio = $req->input('idDuenio');
        
        // Buscar todas las propiedades que pertenecen al dueño con el ID obtenido
        $propiedades = Propiedad::where('idDuenio', $idDuenio)->get();
    
        // Buscar al dueño por su ID
        $duenio = Duenio::find($idDuenio);
    
        // Devolver la vista 'propiedadDuenio' pasando las propiedades y el dueño como datos
        return view('propiedadDuenio', compact('propiedades', 'duenio'));
    }
    
    public function verDuenioPropiedad(Request $req){
        // Obtener el ID de la propiedad desde la solicitud (request)
        $idPropiedad = $req->input('idPropiedad');
        
        // Buscar la propiedad por su ID
        $propiedad = Propiedad::find($idPropiedad);
       
        // Buscar al dueño de la propiedad utilizando el ID del dueño almacenado en la propiedad
        $duenio = Duenio::find($propiedad->idDuenio);
        
        // Devolver la vista 'duenioPropiedad' pasando el dueño y la propiedad como datos
        return view('duenioPropiedad', compact('duenio', 'propiedad'));
    }
    
}
