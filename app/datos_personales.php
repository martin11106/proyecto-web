<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datos_personales extends Model
{
    protected $table='datos_personales';
    protected $fillable =[
        'nombre','apellido_materno','apellido_paterno','genero','telefono'
    ];
}
