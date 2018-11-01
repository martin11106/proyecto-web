<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datos_user extends Model
{
    protected $table='datos_user';
    protected $fillable =[
        'correo','password','matricula'
    ];
}
