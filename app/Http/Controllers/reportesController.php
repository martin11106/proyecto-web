<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\reportes;

class reportesController extends Controller
{
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



                                      /////////////API////////////////////

    public function index()
    {
       return reportes::all();
    }
    ////Ya funciona





        public function store(Request $request)
        {
        $reporte = new reportes();

        $reporte->fill([
            'user_id' => $request->user_id,
            'answare_id' => $request->answare_id,
            'descripcion' => $request->descripcion

        ]);

        $reporte->save();
        return $reporte;
        }
        

    public function show($id)
    {
        return reportes::find($id);
    
    }
    ////Ya funciona






    public function update(Request $request, $id)
    {
        $reporte =reportes::find($id);
        $data = [
            'user_id' => $request->user_id,
            'answare_id' => $request->answare_id,
            'descripcion' => $request->descripcion
        ];
        $reporte->update($data);
        return $reporte;
    }

    public function destroy($id)
    {
        $reporte =reportes::find($id);
        $reporte->delete();
        return 'true';

    }

}
