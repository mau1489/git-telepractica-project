<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Practicante extends Model
{
    protected $fillable = [
        'carrera_id',
        'comuna_id',
        'institucion_id',
        'nivel_educacional_id',
        'region_id',
        'tipo_practica_id',
        'usuario_id',
        'run',
        'nombre_completo',
        'email',
        'telefono',
        'internet_fijo',
        'equipo_computacional',
        'cantidad_horas',
        'cantidad_meses'
    ];
}
