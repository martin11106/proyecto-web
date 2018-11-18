<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\question;

class makeQuestionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return User::where('id',auth()->id())->get();
    }

    public function store(Request $request)
    {
        $pregunta=new question();
        $pregunta->titulo = $request->titulo;
        $pregunta->user_id = auth()->id();
        $pregunta->descripcion= $request->descripcion;
        $pregunta->status= "sin contestar";
        $pregunta->hora="1";
        $pregunta->fecha="2";
        $pregunta->save();
        return $pregunta;
    }




}
