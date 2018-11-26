<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\materia;

class materiaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $materia =materia::all();
        return $materia;
    }

}
