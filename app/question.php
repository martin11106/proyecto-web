<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    protected $table = 'question';
    protected $fillable = [
        'fecha', 'hora', 'user_id', 'titulo', 'descripcion', 'status'
    ];
}
