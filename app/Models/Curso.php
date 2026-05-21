<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $primaryKey = 'id_curso';

    protected $fillable = [
        'nombre_curso', 'creditos', 'descripcion'
    ];
}