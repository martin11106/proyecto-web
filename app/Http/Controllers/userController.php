<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\datos_personales;
use App\datos_user;
use App\user;
class userController extends Controller
{
    public function index(){
        
        $usuario=user::orderBy('puntos', 'DESC')->take(2)->get();
        return $usuario;
    }


    



    //crea un usuario
    public function guardar(Request $request){
        $usuario=new user();
        $usuario->fill([
             'nombre'=>$request->nombre,
             'apellido_paterno'=>$request->apellido_paterno,
             'apellido_materno'=>$request->apellido_materno,
             'matricula'=>$request->matricula,
             'correo'=>$request->correo,
             'password'=>$request->password,
             'genero'=>$request->genero,
             'telefono'=>$request->telefono,
             'puntos'=>" 0",


         ]);
    }
    //resive de parametro un id y elimina un usuario
    public function delete($id){
        $usuario=user::find($id);
        $usuario->delete();
       
        return $usuario;
    }
    public function show($id)
    {
        $usuario=user::find($id);
        return $usuario;
    }
    //resive de parametro un usuario y modifica 
    public function update($id, Request $request){
        $usuario=user::find($id);
        $data=([
            'nombre'=>$request->nombre,
             'apellido_paterno'=>$request->apellido_paterno,
             'apellido_materno'=>$request->apellido_materno,
             'matricula'=>$request->matricula,
             'correo'=>$request->correo,
             'password'=>$request->password,
             'genero'=>$request->genero,
             'telefono'=>$request->telefono,
             'puntos'=>" 0",
        ]);
        $usuario->update($data);
        return $usuario;
    }
    
    public function login(){
        
    }
    public function verusuario(){
        
    }
}
