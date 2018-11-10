<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\datos_personales;
use App\datos_user;
use App\user;
class userController extends Controller
{
    public function index(){
        $usuario=datos_personales::All();
        $usuario_datos=datos_user::All();
        return $usuario." ".$usuario_datos;
    }
    //crea un usuario
    public function guardar(Request $request){
        $usuario=new datos_personales();
        $usuario->fill([
             'nombre'=>$request->nombre,
             'apellido_paterno'=>$request->apellido_paterno,
             'apellido_materno'=>"loremdas2",
             'genero'=>"hola",
             'telefono'=>" 21232"

         ]);
         $usuario_datos=new datos_user();
         $usuario_datos->fill([
              'correo'=>$request->correo,
              'password'=>'43DSA2',
              'matricula'=>"243",
          ]);
          $usuario_datos->save();
          $usuario->save();
         
          return $usuario." ".$usuario_datos;
    }
    //resive de parametro un id y elimina un usuario
    public function delete($id){
        $usuario=datos_personales::find($id);
        $usuario_datos=datos_user::find($id);
        $usuario->delete();
        $usuario_datos->delete();
        return $usuario;
    }
    public function show($id)
    {
        $usuario= datos_personales::find($id);
        $usuario_datos=  datos_user::find($id);
        return $usuario.' '.$usuario_datos;
    }
    //resive de parametro un usuario y modifica 
    public function update($id, Request $request){
        $usuario=datos_personales::find($id);
        $data=([
            'nombre'=>$request->nombre,
            'apellido_paterno'=>$request->apellido_paterno,
            'apellido_materno'=>"loredasmdas2",
            'genero'=>"holasda",
            'telefono'=>" 2123122"
        ]);
        $usuario_datos=datos_user::find($id);
        $datos=([
             'correo'=>$request->correo,
             'password'=>'4312DSA2',
             'matricula'=>"21243",
         ]);
        $usuario->update($data);
        $usuario_datos->update($datos);
        return $usuario." ".$usuario_datos;
    }
    
    public function login(){
        
    }
    public function verusuario(){
        
    }
}
