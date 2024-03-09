<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class convivios extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'participacion',
        'maestro',
        'horas_solicitadas',
        'comida',
        'dia',
        'hora',
    ];

}
