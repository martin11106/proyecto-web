<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\reportes;

class reportesController extends Controller
{
    public function index(){
        return reportes::all();
    }
    public function crearReportes(){
        return view ('Reportes.crear', compact('reportes'));
     }

        public function getReportes(){
            $reportes = reportes::all();
            return view ('Reportes.reportes',compact('reporte'));
        }

        public function guardarReporte(Request $request){
            $reportes = new reportes;
            $reportes->user_id=$request->user_id;
            $reportes->answare_id=$request->answare_id;
            $reportes->descripcion=$request->descripcion;        
        
    
            $reportes->save();
    
            $reportes = reportes::all();
    
            return redirect('reportes');
        }

        public function eliminarReporte($id){
            $reportes = reportes::find($id);
            $reportes->delete();
            return redirect('reportes');
            //        reportes es el modelo
                }

        

}
