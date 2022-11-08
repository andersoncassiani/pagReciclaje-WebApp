<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\Reporte;


use Illuminate\Validation\Rules;
use Illuminate\Http\Request;



class ReportesController extends Controller
{
   
    public function create()
    {
        
        return view('dashboard');
    }

    public function store(Request $request)
    {
        $request->validate([
            'descripcion_reporte' => 'required|string',
            'imagen' => 'required|mimes:jpg,jpeg,png',
            'cuidad' => 'required|string', 
            
        ]);
        
    //Aqui guradamos la imagen de cada usuario en la carpeta imagen de Stotage/public con el id que pertenete al usuario
    $rutaimg=($request->file('imagen'))?$request->file('imagen')->store('imagenes/'.auth()->id(),'public'):'';
        $reporte = new Reporte();
            $reporte->descripcion_reporte = $request->descripcion_reporte;
            $reporte->imagen = $rutaimg;
            $reporte->cuidad = $request->cuidad;
            $reporte->user_id = auth()->id();
           
        $reporte->save();
        return back()->with('success', 'Reporte enviado con exito. Gracias por reportar!!');

    }

    


}