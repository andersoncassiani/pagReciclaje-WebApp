<?php

namespace App\Http\Controllers;
use App\Models\Reporte;
use Illuminate\Http\Request;

class VerReportesController extends Controller
{
    //
    public function create()
    {
        
        return view('ver-reportes');
    }


    public function verReportes(){
        $repotesUsuario = Reporte::where('user_id',auth()->id())->get();  
  
        return view('ver-reportes',compact('repotesUsuario'));
      }

}
