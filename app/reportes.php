<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reportes extends Model
{
    protected $table='datos_user';
    protected $fillable =[
        'user_id','answare_id','descripcion'
    ];
}
