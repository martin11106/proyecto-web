<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\datos_personales;
use App\datos_user;
use App\User;

class userController extends Controller
{
    public function index(){
        
        $usuario=User::orderBy('puntos', 'DESC')->take(2)->get();
        return $usuario;
    }
    //crea un usuario
    public function guardar(Request $request){
        $user = new User;

        $user->nombre=$request->nombre;
        $user->apellido_paterno=$request->apellido_paterno;
        $user->apellido_materno=$request->apellido_materno;
        $user->matricula=$request->matricula;
        $user->telefono=$request->telefono;
        $user->email=$request->email;
        $user->email_verified_at=now();
        $user->remember_token=str_random(10);
        $user->password=bcrypt($request->password);
        $user->genero=$request->genero;        
        $user->puntos=0;

        $user->save();

        return redirect('/login');
    }

    //resive de parametro un id y elimina un usuario
    public function delete($id){
        $usuario=User::find($id);
        $usuario->delete();
       
        return $usuario;
    }
    public function show($id)
    {

    }
    //resive de parametro un usuario y modifica 
    public function update($id, Request $request){

    }

}
