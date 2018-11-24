<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class materia extends Model
{
    protected $table = 'materia';
    protected $fillable = [
        'id','materia'
    ];
}
